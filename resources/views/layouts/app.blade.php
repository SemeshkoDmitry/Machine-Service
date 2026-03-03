<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Machine Service</a>

        <div>
            <a class="text-white me-3" href="/">Головна</a>
            <a class="text-white me-3" href="/machines">Обладнання</a>
            <a class="text-white" href="/about">Про компанію</a>
        </div>
    </div>
</nav>

<div class="container mt-4 flex-grow-1">
    @yield('content')
</div>

<footer class="bg-light text-center p-3">
    © 2026 Machine Service
</footer>

</body>
</html>