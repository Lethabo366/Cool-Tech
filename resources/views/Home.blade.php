<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  @vite(['resources/css/styles.css'])
</head>

<body>
  <!-- Below is the navigation bar -->
  <div class="topnav">
    <a class="active" href="{{ url('/') }}/">Home</a>
    <a href="{{ url('/Search/') }}/">Search</a>
    <a href="{{ url('/legal/') }}/">Legal</a>
  </div>
  <br>
  <h1>Cool-Tech Articles</h1>
  <?php $i = 0 ?>
  <!-- Below each of the articles in the articles variable will be printed -->
  @foreach($articles as $article)
  <div class="article_block">
    <h2><a href="{{ url('/article/') }}/{{$article->id}}">{{$article->article_title}}</a></h2>
    <p>{{$article->article_content}}</p>

    <a href="{{ url('/article/') }}/{{$article->id}}">
      <button>See More</button>
    </a>
  </div>

  @endforeach

</body>
<footer>
  <x-alert>
  </x-alert>
  <!-- Below is the trademark which will display the current year. -->
  <p>&copy; {{ date('Y') }} laravel. All rights reserved.</p>
  <!-- Below are links to the Search and legal blades. -->
  <a href="{{ url('/Search/') }}/">Search</a>
  <a href="{{ url('/legal/') }}/">legal</a>

</footer>

</html>

<!-- Resources used 
 https://www.w3schools.com/Css/css_navbar.asp
 -->