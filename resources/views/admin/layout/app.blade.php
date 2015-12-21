<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        @yield('navbar')
    </nav>
</div>

@yield('content')
</body>
</html>