<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search</title>
</head>

<body>
     <!-- Below is the navigation bar -->
    <div class="topnav">
  <a href="{{ url('/') }}/">Home</a>
  <a class="active" href="{{ url('/Search/') }}/">Search</a>
  <a href="{{ url('/legal/') }}/">Legal</a>
</div>
<br/>
   <!-- Below below form will search for the article the user wants by the article id 
         when the search button is clicked -->
   <form action="{{route('article.articleSearch')}}" method="get" autocomplete="off">
      <label for="article_id"></label>
      <input type="text" id="article_id" name="article_id" placeholder="Enter the Article id." />
      <button type="submit">Search</button>
   </form>

   <!-- Below below form will search for the articles the user wants by id 
         when the search button is clicked -->
   <form action="{{route('article.categorySearch')}}" method="get" autocomplete="off">
      <label for="category_search"></label>
      <input type="text" id="category_search" name="category_search" placeholder="Enter the Category name" />
      <button type="submit">Search</button>
   </form>

   <!-- Below below form will search for the article the user wants by id 
         when the search button is clicked -->
   <form action="{{route('article.tagSearch')}}" method="get" autocomplete="off">
      <label for="tag_name"></label>
      <input type="text" id="tag_name" name="tag_name" placeholder="Enter the Tag name" />
      <button type="submit">Search</button>
   </form>

   <footer>\
      <x-alert>
      </x-alert>
      <!-- Below is the trademark which will display the current year. -->
      <p>&copy; {{ date('Y') }} laravel. All rights reserved.</p>
      <!-- Below are links to the Search and legal blades. -->
      <a href="{{ url('/Search/') }}/">Search</a>
      <a href="{{ url('/legal/') }}/">legal</a>

   </footer>
</body>

</html>