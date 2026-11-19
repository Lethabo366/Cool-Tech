<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class blog_article extends Model
{   
    /* Below i am allowing the article_title , article_content and the category to be 
     * edited in the table.*/
    protected $fillable = (['article_title','article_content','category']);

    use HasFactory;

    /* Below in the tags function I am displaying a relationship between a blog article 
     * and the Tags.*/
    public function tags()
{
    return $this->belongsToMany(tag::class);
}

    /* Below in the tags function I am displaying a relationship between a blog article 
     * and the Tags.*/
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}


