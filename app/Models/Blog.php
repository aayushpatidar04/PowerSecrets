<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'content',
        'meta_description',
        'meta_keywords',
        'image'
    ];
}
