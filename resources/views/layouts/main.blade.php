<!DOCTYPE html>
<html lang="en" data-bs-theme="light"> <!-- default light -->

<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Deri Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>



    <style>
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="{{ session('theme', 'light') }}">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap JS & Theme Toggle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggle = document.getElementById('themeToggle');
        const icon = document.getElementById('themeIcon');

        toggle?.addEventListener('click', () => {
            const html = document.documentElement;
            const current = html.getAttribute('data-bs-theme');
            const newTheme = current === 'dark' ? 'light' : 'dark';

            html.setAttribute('data-bs-theme', newTheme);
            icon.classList.toggle('bi-sun-fill');
            icon.classList.toggle('bi-moon-fill');
        });
    </script>


</body>

</html>