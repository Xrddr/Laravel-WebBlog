<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/code.svg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="{{asset('images/code-slash.svg')}}">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
            <li><a href="{{route('news')}}" class="nav-link px-2 link-dark">News</a></li>
            <li><a href="{{route('create_news')}}" class="nav-link px-2 link-dark">Create news</a></li>
            <li><a href="{{route('about')}}" class="nav-link px-2 link-dark">About</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <a href="/signin" type="button" class="btn btn-primary me-2">Login</a>
            <a href="/signup" type="button" class="btn btn-primary me-2">Sign-up</a>
        </div>
    </header>
</div>
<div class="container">
    @yield('main_content')
</div>
<div class="fixed-bottom">
    <blockquote class="blockquote text-center">
        <p class="mb-0">Made with <img src="{{asset('images/heart.svg')}}"> by <a style="text-decoration: none" class="link-primary" href="about">xrddr</a>
        </p>
    </blockquote>
</div>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js?v=513" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
