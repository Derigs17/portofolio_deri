@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="text-center mb-5">
    <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; border: 5px solid #ffffff30; margin: auto; box-shadow: 0 0 20px rgba(0, 191, 255, 0.4);" data-aos="zoom-in">
        <img src="{{ asset('images/deri.png') }}" alt="Foto Deri" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <h1 class="mt-5 fw-bold" data-aos="fade-up">Halo, saya Deri Gilang Sumudra 👋</h1>
    <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Fullstack Web Developer | ReactJS & Laravel Enthusiast</p>

    <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ asset('cv/deri-gilang-sumudra-cv.pdf') }}" class="btn btn-dark" download>📄 Download CV</a>
        <a href="https://wa.me/6285724523546" class="btn btn-success" target="_blank">💬 WhatsApp</a>
        <a href="https://github.com/Derigs17" class="btn btn-outline-secondary" target="_blank">🐱 GitHub</a>
    </div>
</div>

<section class="my-5 text-center">
    <h3 class="fw-semibold" data-aos="fade-up">Tentang Saya</h3>
    <p class="mx-auto text-muted" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="100">
        Saya Deri, Fullstack Web Developer dari Yogyakarta yang fokus pada pengembangan aplikasi berbasis web.
        Saya senang membangun sistem yang bermanfaat seperti manajemen masjid atau dashboard internal.
    </p>
    <a href="{{ route('about') }}" class="btn btn-outline-primary mt-2" data-aos="fade-up" data-aos-delay="200">Selengkapnya</a>
</section>

<div class="d-flex justify-content-between align-items-center mt-5 mb-3 flex-wrap gap-2">
    <h2 class="fw-semibold mb-0">Project Terbaru</h2>
    <a href="{{ route('projects') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
</div>

<div class="row">
    @foreach($projects as $project)
    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
        <div class="card h-100 shadow-sm border-0">
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height: 200px; object-fit: cover;">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                <p class="card-text text-muted">{{ Str::limit($project->description, 100) }}</p>
                <a href="{{ $project->link }}" class="btn btn-outline-primary mt-auto w-100" target="_blank">🔗 Lihat Project</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<section class="mt-5 text-center">
    <h3 class="mb-4 fw-semibold" data-aos="fade-up">Tech Stack</h3>
    <div class="d-flex flex-wrap justify-content-center gap-2" data-aos="zoom-in" data-aos-delay="100">
        @foreach(['HTML', 'CSS', 'JavaScript', 'ReactJS', 'Node.js', 'Laravel', 'MySQL', 'Git'] as $tech)
            <span class="badge rounded-pill bg-primary px-3 py-2 shadow-sm">{{ $tech }}</span>
        @endforeach
    </div>
</section>
@endsection
