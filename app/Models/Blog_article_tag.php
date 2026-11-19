<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_article_tag extends Model
{   
    // Below i am allowing the blog_article id and Tag_id columns to be edited
    protected $fillable = (['blog_article_id','tag_id']);

    protected $table = 'blog_article_tag';
    use HasFactory;
}
