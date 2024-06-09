<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('app')
</head>
<body>
    <header>
    </header>

    <nav>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
</body>
</html>
