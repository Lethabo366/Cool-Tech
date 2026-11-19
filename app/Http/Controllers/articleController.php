<?php

namespace App\Http\Controllers;

use App\models\Blog_article;
use App\models\Tag;
use App\models\Category;
use Illuminate\Http\Request;


class articleController extends Controller
{
    // This function sends 5 articles to the home blade
    public function index()
    {
        //this will get 5 entries from the Blog Article database table 
        $blog_articles = Blog_article::paginate(5);

        // this will send the entries to the Home blade
        return view('home', (['articles' => $blog_articles]));
    }

    /* This function finds the category with the same slug that is
    *  entered in the parenthesis
    * this will find the category using the slug and find the blog_articles 
    * that fall under that category.
    * if their is no category under that name the user will be redirected 
    * to a different view*/
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return view('NoCategory', (['category_name' => $slug]));
        } else {

            $blog_articles = $category->blog_articles;
            $category_name = $category->category_name;

            // This will send the articles and the category name to the category blade.
            return view('category', (['articles' => $blog_articles, 'category_name' => $category_name]));
        }
    }

    /*This will find the tag by the id and get the articles that have those tags and 
     * send them to the tag blade */
    public function tag($tag_id)
    {
        $tag = Tag::find($tag_id);
        $blog_articles = $tag->blog_articles;
        $tag_name = $tag->tag_name;
        return view('tag', (['articles' => $blog_articles, 'tag_name' => $tag_name]));
    }

    /*This will find the article using the blog_article id and retrieve the tags 
     * as well as the category name and category slug 
     * for that article and send them to the blog article blade */
    public function blog_article($blog_article_id)
    {
        $blog_article = Blog_article::find($blog_article_id);
        $tag_collection = $blog_article->tags;
        $tag_name_array = $tag_collection->pluck('tag_name', 'id');
        $category_name = $blog_article->category()->first()->category_name;
        $category_slug = $blog_article->category()->first()->slug;

        return view('blog_article', (['article' => $blog_article, 'tags' => $tag_name_array, 'category_name' => $category_name, 'slug' => $category_slug]));
    }

    /*This will redirect to the legal blade. */
    public function legal()
    {
        return view('legal');
    }

    /*This will redirect to category show function.  */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /*This will find the article with the same id and send it to the article blade */
    public function articleSearch(Request $request)
    {
        $article_id = $request->article_id;

        return redirect()->route('article.articleShow', $article_id);
    }

    /*This will find the article with the same article id that is mentioned
     * within the parentheses.*/

    public function articleFind($article_id)
    {
        $article = Blog_article::find($article_id);

        return view('ArticleSearchResults', compact('article'));
    }

    /* This will find the category with a similar name to the name retrieved from the 
    *  request and find articles under that category. */
    public function categorySearch(Request $request)
    {
        $category = Category::where('category_name', $request->category_search)->first();
        $articles = $category->blog_articles;
        return view('CategorySearchResults', ['articles' => $articles]);
    }

    /* This will find the tag with a similar name to the name retrieved from the 
     *  request and find articles under that tag. */
    public function tagSearch(Request $request)
    {
        $tag = Tag::where('tag_name', $request->tag_name)->first();
        $articles = $tag->blog_articles;

        return view('TagSearchResults', ['articles' => $articles]);
    }

    //This will redirect to the search blade
    public function search()
    {
        return view('Search');
    }

    public function NoCateogory()
    {
        return view('NoCategory');
    }
}
