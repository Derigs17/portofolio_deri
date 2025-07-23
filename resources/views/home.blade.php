@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="text-center mb-5">
    <div class="text-center">
    <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; border: 2px solid #000; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
        <img src="{{ asset('images/deri.png') }}" alt="Foto Deri" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
</div>
   
    <h1>Halo, saya Deri Gilang Sumudra 👋</h1>
    <p class="lead">Fullstack Web Developer | ReactJS & Laravel Enthusiast</p>

    <div class="d-flex justify-content-center gap-2 mt-3">
        <a href="{{ asset('cv/deri-gilang-sumudra-cv.pdf') }}" class="btn btn-dark" download>📄 Download CV</a>
        <a href="https://wa.me/6285724523546" class="btn btn-success" target="_blank">💬 WhatsApp</a>
        <a href="https://github.com/Derigs17" class="btn btn-outline-secondary" target="_blank">🐱 GitHub</a>
    </div>
</div>

{{-- Tentang Singkat --}}
<section class="my-5 text-center">
    <h3>Tentang Saya</h3>
    <p class="mx-auto" style="max-width: 700px;">
        Saya Deri, Fullstack Web Developer dari Yogyakarta yang fokus pada pengembangan aplikasi berbasis web.
        Saya senang membangun sistem yang bermanfaat seperti manajemen masjid atau dashboard internal.
    </p>
    <a href="{{ route('about') }}" class="btn btn-outline-secondary mt-2">Selengkapnya</a>
</section>

{{-- Project Terbaru --}}
<div class="d-flex justify-content-between align-items-center mt-5 mb-3">
    <h2>Project Terbaru</h2>
    <a href="{{ route('projects') }}" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
</div>

<div class="row">
    @foreach($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                <a href="{{ $project->link }}" class="btn btn-outline-primary" target="_blank">Lihat Project</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Tech Stack --}}
<section class="mt-5">
    <h3 class="text-center mb-3">Tech Stack</h3>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        <span class="badge bg-dark">HTML</span>
        <span class="badge bg-dark">CSS</span>
        <span class="badge bg-dark">JavaScript</span>
        <span class="badge bg-dark">ReactJS</span>
        <span class="badge bg-dark">Node.js</span>
        <span class="badge bg-dark">Laravel</span>
        <span class="badge bg-dark">MySQL</span>
        <span class="badge bg-dark">Git</span>
    </div>
</section>
@endsection