@extends('layouts.main')

@section('title', 'Tambah Project')

@section('content')
<h2>Tambah Project Baru</h2>

<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul Project</label>
        <input type="text" class="form-control" name="title" id="title" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="tech_stack" class="form-label">Stack Teknologi</label>
        <input type="text" class="form-control" name="tech_stack" id="tech_stack" placeholder="Contoh: ReactJS, Laravel" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar Project</label>
        <input type="file" name="image" class="form-control">
    </div>


    <div class="mb-3">
        <label for="link" class="form-label">Link (opsional)</label>
        <input type="url" class="form-control" name="link" id="link">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection