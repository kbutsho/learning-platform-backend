<?php

namespace App\Http\Controllers;

use App\Helpers\ExceptionHandler;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function getAllTopics(Request $request)
    {
        try {
            // request data
            $perPage = $request->query('perPage') ?: 10;
            $searchTerm = $request->query('searchTerm');
            $statusFilter = $request->query('status');
            $categoryFilter = $request->query('category');
            $sortOrder = $request->query('sortOrder', 'desc');
            $sortBy = $request->query('sortBy', 'topics.id');

            // query
            $query = Topic::query()
                ->leftJoin('topic_categories', 'topics.id', '=', 'topic_categories.topic_id')
                ->leftJoin('categories', 'topic_categories.category_id', '=', 'categories.id')
                ->orderBy($sortBy, $sortOrder)
                ->select('topics.*')
                ->distinct();

            // search
            if ($searchTerm) {
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('topics.name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('topics.description', 'like', '%' . $searchTerm . '%')
                        ->orWhere('topics.status', 'like', '%' . $searchTerm . '%')
                        ->orWhere('categories.name', 'like', '%' . $searchTerm . '%');
                });
            }
            // filter by status
            if ($statusFilter) {
                $query->whereRaw('LOWER(topics.status) = ?', strtolower($statusFilter));
            }
            // filter by category
            if ($categoryFilter) {
                $query->whereHas('categories', function ($q) use ($categoryFilter) {
                    $q->where('name', $categoryFilter);
                });
            }

            // pagination
            $paginationData = $query->paginate($perPage);
            $total = Topic::count();
            // formate data
            $formattedData = $paginationData->map(function ($topic) {
                return [
                    'id' => $topic->id,
                    'name' => $topic->name,
                    'heading' => $topic->heading,
                    'description' => $topic->description,
                    'status' => $topic->status,
                    'categories' => $topic->categories->map(function ($category) {
                        return [
                            'id' => $category->id,
                            'name' => $category->name
                        ];
                    })->toArray()
                ];
            });
            // return
            return response()->json([
                'status' => true,
                'message' => count($paginationData->items()) . " items fetched successfully!",
                'fetchedItems' => count($paginationData->items()),
                'currentPage' => $paginationData->currentPage(),
                'totalItems' => $total,
                'data' => $formattedData
            ], 200);
        } catch (\Exception $e) {
            return ExceptionHandler::handleException($e);
        }
    }
}
