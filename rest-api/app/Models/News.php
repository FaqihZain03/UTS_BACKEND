<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    # menambahkan property fillable
    protected $fillable = [
        'title', 'author', 'description', 'content', 'url', 'url_image', 'published_at', 'category'
    ];

    public static function search($keyword)
    {
    return self::where('title', 'like', "%$keyword%")
                ->orWhere('content', 'like', "%$keyword%")
                ->get();
    }
}
