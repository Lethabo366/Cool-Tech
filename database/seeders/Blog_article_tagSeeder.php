<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Blog_article;

class Blog_article_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $article_ids= Blog_article::pluck('id')->toArray();
        $tag_ids = Tag::pluck('id')->toArray();

        foreach($article_ids as $id){
            $tag_rand_ids =  array_rand(array_flip($tag_ids),rand(1,5));
            Blog_article::find($id)->tags()->attach($tag_rand_ids);

        }
        
        
    }
}
