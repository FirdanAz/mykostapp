<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MyKostApp')</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    @stack('styles')
</head>

<body class="bg-light">

    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">
            @auth
                @include('partials.sidebar')
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    @yield('content')
                </main>
            @else
                <main class="col-12 py-4">
                    @yield('content')
                </main>
            @endauth
        </div>
    </div>

    @include('partials.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>