<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class='bg-dark text-white'>
    <header class="d-flex justify-content-center py-3 text-bg-dark border-bottom">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-white @if(Route::currentRouteName() == 'home') active @endif" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link px-2 text-white @if(Route::currentRouteName() == 'about') active @endif">About</a></li>
        <li class="nav-item"><a href="/review" class="nav-link px-2 text-white @if(Route::currentRouteName() == 'review') active @endif">Reviews</a></li>
      </ul>
    </header>
    <div class="container">
        @yield('main_content')
    </div>

</body>
</html>