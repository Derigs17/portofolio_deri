<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <script>
        // Load theme dari localStorage SEBELUM page render
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

    {{-- Bootstrap + Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- AOS Animation CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
        }
        .theme-transition, html, body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main class="container" style="padding-top: 100px;">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({ once: true, duration: 700 });

        const toggle = document.getElementById('themeToggle');
        const icon = document.getElementById('themeIcon');
        const html = document.documentElement;

        const animateTheme = () => {
            html.classList.add('theme-transition');
            setTimeout(() => html.classList.remove('theme-transition'), 300);
        };

        toggle?.addEventListener('click', () => {
            const current = html.getAttribute('data-bs-theme');
            const newTheme = current === 'dark' ? 'light' : 'dark';

            animateTheme();
            html.setAttribute('data-bs-theme', newTheme);
            icon.src = newTheme === 'dark'
                ? "{{ asset('images/icon-sun.svg') }}"
                : "{{ asset('images/icon-moon.svg') }}";
            localStorage.setItem('theme', newTheme);
        });

        window.addEventListener('DOMContentLoaded', () => {
            const saved = localStorage.getItem('theme');
            if (saved) {
                html.setAttribute('data-bs-theme', saved);
                icon.src = saved === 'dark'
                    ? "{{ asset('images/icon-sun.svg') }}"
                    : "{{ asset('images/icon-moon.svg') }}";
            }
        });
    </script>
</body>
</html>
