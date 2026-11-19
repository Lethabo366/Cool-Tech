<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  @vite(['resources/css/styles.css'])
</head>

<body>
  <!-- Below is the navigation bar -->
  <div class="topnav">
    <a  href="{{ url('/') }}/">Home</a>
    <a class="active" href="{{ url('/Search/') }}/">Search</a>
    <a href="{{ url('/legal/') }}/">Legal</a>
  </div>
  <br />
  <!-- Below is a heading that will tell the user the category does not exist -->
  <h1 class='category_head'>The Category {{$category_name}} does not exist</h1>
  <br/>
  <footer>
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