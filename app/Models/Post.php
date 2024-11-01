<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author_id', // If you plan to support multiple authors in the future
        'published_at', // To track when the post was published
        'cover_image', // URL to an image of the book cover or related image
        'category', // Optional: to categorize your posts
    ];
}
