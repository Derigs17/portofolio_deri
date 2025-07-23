<!DOCTYPE html>
<html lang="en">
<!-- Inject theme dari localStorage SEBELUM apapun ke-load -->
<head>
    <script>
        (() => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                document.documentElement.setAttribute('data-bs-theme', savedTheme);
            }
        })();
    </script>

    <meta charset="UTF-8">
    <title>@yield('title') - Deri Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- JS dari Vite --}}
    @vite('resources/js/app.js')

    <style>
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Vite JS --}}
    @vite('resources/js/app.js')
</body>

</html>
