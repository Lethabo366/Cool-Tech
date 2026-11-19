<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    //Below i am allowing the Tag_name to be edited in the table.
    protected $fillable = (['tag_name']);

    use HasFactory;

    /* Below in the blog_articles function i am declaring the relationship between the 
     * the tags and blog_articles.*/
    public function blog_articles()
    {

        return $this->belongsToMany(Blog_article::class);
    }
}
