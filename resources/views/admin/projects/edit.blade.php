@extends('layouts.main')

@section('title', 'Edit Project')

@section('content')
    <h2>Edit Project</h2>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Project</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tech_stack" class="form-label">Stack Teknologi</label>
            <input type="text" name="tech_stack" id="tech_stack" class="form-control" value="{{ $project->tech_stack }}" required>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="url" name="link" id="link" class="form-control" value="{{ $project->link }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
