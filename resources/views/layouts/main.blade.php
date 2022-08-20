<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet" />
    {{-- <link href="((mix('css/app.css')))" rel="stylesheet"/> --}}
</head>

<body>
    <div class="container">
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
        </nav>
    </div>

    <div>
        @yield('content')
    </div>
</body>

</html>
