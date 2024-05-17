<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'heading', 'status'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'topic_categories', 'topic_id', 'category_id');
    }
}
