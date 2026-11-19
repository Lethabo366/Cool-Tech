<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$article->article_title}}</title>
    @vite(['resources/css/styles.css'])

</head>

<body>
    <!-- Below is the navigation bar. -->
    <div class="topnav">
  <a class="active" href="{{ url('/') }}/">Home</a>
  <a href="{{ url('/Search/') }}/">Search</a>
  <a href="{{ url('/legal/') }}/">Legal</a>
</div>
<br/>
<!-- Below the Article title and details will be printed. -->
    <h2>{{$article->article_title}}</h2>
    <p>Created at :{{$article->created_at}}</p>
    <p>Updated at :{{$article->updated_at}}</p>
    <p class="article_content">{{$article->article_content}}</p>

    <!-- Each of the tags for this article will be printed and each will be a link to other pages with the same tags-->
    @foreach($tags as $id => $tag)
    <a href="{{ url('/tag/') }}/{{$id}}">
        <p class='article__tags'>{{$tag}}</p>
    </a>
        @endforeach

        <!-- Below the Category this article is in will be printed and it will be a link to other articles in the same category -->
        <p class='article__category'>
          <a href="{{ url('/category/') }}/{{$slug}}">{{$category_name}}
          </a>
        </p>

</body>

<footer >
<x-alert>
</x-alert>
  <!-- Below is the trademark which will display the current year. -->
<p>&copy; {{ date('Y') }} laravel. All rights reserved.</p>
<!-- Below are links to the Search and legal blades. -->
<a href="{{ url('/Search/') }}/">Search</a>
<a href="{{ url('/legal/') }}/">legal</a>

</footer>
</html>