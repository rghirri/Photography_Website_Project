<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Models\Category; 

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [

        'title', 'content', 'image', 'published_at', 'category_id', 'user_id'

    ];

    protected $datess = [

        'published_at'

    ];

    /**
     * Delete post image from the storage
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * Check if post has tags
     * @return bool
     */
    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearched($query)
    {
        
        $search = request()->query('search');

        if(!$search)
        {
            return $query->published();
        }

        return $query->published()->where('title', 'LIKE', "%{$search}%");

    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }


}