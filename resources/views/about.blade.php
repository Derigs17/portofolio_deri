@extends('layouts.main')

@section('title', 'Tentang Saya')

@section('content')
<style>
    .glowing-frame {
        border-radius: 50%;
        border: 2px solid #0dcaf0;
        box-shadow: 0 0 20px rgba(13, 202, 240, 0.6);
        transition: box-shadow 0.5s ease-in-out;
    }
    .glowing-frame:hover {
        box-shadow: 0 0 35px rgba(13, 202, 240, 0.9);
    }
    .tech-card {
        background-color: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 1.5rem;
        transition: 0.3s ease;
    }
    .tech-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(13, 202, 240, 0.1);
    }
</style>

<div class="text-center container py-5">
    <h2 class="fw-bold mb-4" data-aos="fade-up">Tentang Saya</h2>

    {{-- Foto Ganti-Ganti + Glow --}}
    <div class="position-relative mx-auto mb-4 glowing-frame" style="width: 200px; height: 200px;">
        <img id="photoSlider"
             src="{{ asset('images/about/foto1.png') }}"
             alt="Foto Deri"
             class="img-fluid rounded-circle shadow"
             style="width: 100%; height: 100%; object-fit: cover; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;"
             data-aos="zoom-in">
    </div>

    <div class="mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="100">
        <p class="fs-5">
            Halo! Saya <strong>Deri Gilang Sumudra</strong>, seorang <strong>Fullstack Web Developer</strong> dari Sukabumi yang berfokus pada pengembangan aplikasi berbasis web yang <em>modern</em>, <em>efisien</em>, dan <em>user-friendly</em>.
        </p>
        <p class="fs-5">
            Saya berpengalaman dalam pengembangan <strong>backend</strong> menggunakan <code>Laravel</code>, <code>Node.js</code>, dan <code>Express</code>, serta <strong>frontend</strong> dengan <code>ReactJS</code> dan <code>Blade</code>. Saya terbiasa mengintegrasikan REST API dan bekerja dengan database relasional seperti <code>MySQL</code>.
        </p>
        <p class="fs-5">
            Salah satu proyek unggulan saya adalah sistem <strong>manajemen masjid digital</strong> yang membantu pengurus mengelola informasi dan kegiatan jamaah secara efisien.
        </p>
    </div>

     {{-- Tech Stack --}}
    <div class="row justify-content-center text-center g-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-3">
            <div class="p-4 rounded-4 shadow-sm h-100 border border-secondary-subtle bg-body-tertiary">
                <h5 class="fw-semibold mb-3">🛠️ Backend</h5>
                <ul class="list-unstyled">
                    <li>Node.js</li>
                    <li>Express</li>
                    <li>Laravel</li>
                    <li>MySQL</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 rounded-4 shadow-sm h-100 border border-secondary-subtle bg-body-tertiary">
                <h5 class="fw-semibold mb-3">🎨 Frontend</h5>
                <ul class="list-unstyled">
                    <li>ReactJS</li>
                    <li>React Bootstrap</li>
                    <li>Bootstrap</li>
                    <li>Blade</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 rounded-4 shadow-sm h-100 border border-secondary-subtle bg-body-tertiary">
                <h5 class="fw-semibold mb-3">🧰 Tools</h5>
                <ul class="list-unstyled">
                    <li>Git & GitHub</li>
                    <li>Postman</li>
                    <li>VS Code</li>
                    <li>Laragon</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Button --}}
    <a href="{{ route('contact') }}" class="btn btn-outline-info mt-5 px-4 py-2" data-aos="zoom-in" data-aos-delay="300">
        Hubungi Saya
    </a>
</div>

{{-- Script Slider --}}
<script>
    const photos = [
        "{{ asset('images/about/foto1.png') }}",
        "{{ asset('images/about/foto2.png') }}",
        "{{ asset('images/about/foto3.png') }}",
        "{{ asset('images/about/foto4.png') }}"
    ];

    let index = 0;
    const slider = document.getElementById('photoSlider');

    setInterval(() => {
        slider.style.opacity = 0;
        setTimeout(() => {
            index = (index + 1) % photos.length;
            slider.src = photos[index];
            slider.style.opacity = 1;
        }, 300);
    }, 3000);
</script>
@endsection
