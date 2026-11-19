<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    /* Below in the blog_articles function i am declaring the relationship between
     * the Category and the Blog_article*/
    public function blog_articles()
    {
        return $this->hasMany(Blog_article::class);
    }
}
