<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',        // Title of the book being reviewed
        'content',      // The review text
        'duration',     // Duration of how long it took to read the book
        'user_id',      // The ID of the user who created the review
        'published_at', // Optional: when the review was published
        'cover_image',  // Optional: URL for the book cover or related image
        'category',     // Optional: categorize your reviews (fiction, non-fiction, etc.)
    ];
    
    /**
     * Define the relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        /**
     * Automatically handle dynamic updates when a Post is created or deleted.
     */
    protected static function boot()
    {
        parent::boot();

        // Increment books finished when a new finished post is created
        static::created(function ($post) {
            if ($post->published_at) {
                $user = $post->user;
                if ($user) {
                    $user->increment('books_finished');
                }
            }
        });

        // Decrement books finished when a finished post is deleted
        static::deleted(function ($post) {
            if ($post->published_at) {
                $user = $post->user;
                if ($user) {
                    $user->decrement('books_finished');
                }
            }
        });
    }
}
