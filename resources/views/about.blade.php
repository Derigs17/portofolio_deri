@extends('layouts.main')

@section('title', 'Tentang Saya')
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
</style>

@section('content')
<div class="text-center">
    <h2 class="mb-4 fw-bold" data-aos="fade-up">Tentang Saya</h2>

    {{-- Foto ganti-ganti + glow --}}
<div class="position-relative mx-auto mb-4 glowing-frame" style="width: 200px; height: 200px;">
    <img id="photoSlider" 
        src="{{ asset('images/about/foto1.png') }}" 
        alt="Foto Deri" 
        class="img-fluid rounded-circle shadow"
        style="width: 100%; height: 100%; object-fit: cover; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;"
        data-aos="zoom-in">
</div>


    <div class="mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="100">
        <p>Saya Deri Gilang Sumudra, seorang Fullstack Web Developer asal Sukabumi. Saya memiliki ketertarikan tinggi dalam membangun aplikasi berbasis web yang efisien dan user-friendly.</p>

        <p>Saya berpengalaman menggunakan <strong>Laravel</strong> untuk backend dan <strong>ReactJS</strong> untuk frontend. Selain itu, saya terbiasa menggunakan <strong>MySQL</strong>, mengintegrasikan REST API, serta mengelola proyek dengan <strong>Git</strong>.</p>

        <p>Saya percaya teknologi harus digunakan untuk hal positif. Salah satu proyek saya adalah sistem manajemen masjid yang membantu pengurus dalam mengatur kegiatan dan informasi jamaah.</p>
    </div>

    <a href="{{ route('contact') }}" class="btn btn-outline-primary mt-4" data-aos="fade-up" data-aos-delay="200">Hubungi Saya</a>
</div>
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
@push('scripts')


