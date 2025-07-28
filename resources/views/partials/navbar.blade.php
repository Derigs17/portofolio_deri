<nav id="navbar" class="navbar navbar-expand-lg fixed-top py-3 bg-transparent">
    <div class="container">
        <a class="navbar-brand fw-bold" id="brandName" href="{{ route('home') }}">Deri Portfolio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end pe-4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>

            {{-- Dark mode toggle --}}
            <button id="themeToggle" class="btn ms-3 border-0" style="border-radius: 50%">
                <img id="themeIcon" src="{{ asset('images/icon-moon.svg') }}" alt="theme" width="24" height="24">
            </button>
        </div>
    </div>
</nav>