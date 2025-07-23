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

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            scroll-behavior: smooth;
        }
        html, body, .theme-transition {
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
    <script>
    const images = [
        "{{ asset('images/about/foto1.png') }}",
        "{{ asset('images/about/foto2.png') }}",
        "{{ asset('images/about/foto3.png') }}",
        "{{ asset('images/about/foto4.png') }}",
    ];

    let current = 0;
    const slider = document.getElementById('photoSlider');

    setInterval(() => {
        slider.style.opacity = 0;
        setTimeout(() => {
            current = (current + 1) % images.length;
            slider.src = images[current];
            slider.style.opacity = 1;
        }, 300);
    }, 4000); // ganti tiap 4 detik
</script>


    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // 🔥 Init AOS
        AOS.init({
            once: false, // animasi tiap masuk viewport
            duration: 700,
        });

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

            // 🔁 Refresh AOS supaya animasi ulang
            setTimeout(() => AOS.refresh(), 400);
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

        // ✅ Tutup navbar saat klik link atau area luar
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
            const bsCollapse = new bootstrap.Collapse(document.querySelector('.navbar-collapse'), {
                toggle: false
            });

            navLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    bsCollapse.hide();
                });
            });

            document.addEventListener('click', function (event) {
                const navbar = document.querySelector('.navbar-collapse');
                const toggler = document.querySelector('.navbar-toggler');

                if (
                    navbar.classList.contains('show') &&
                    !navbar.contains(event.target) &&
                    !toggler.contains(event.target)
                ) {
                    bsCollapse.hide();
                }
            });
        });
    </script>
    
</body>
</html>
