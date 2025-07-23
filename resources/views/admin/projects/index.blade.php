@extends('layouts.main')

@section('title', 'Daftar Project')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Project</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-success">+ Tambah Project</a>
</div>


@if ($projects->isEmpty())
<p>Belum ada project ditambahkan.</p>
@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Stack</th>
            <th>Link</th>
            <th>Aksi</th> <!-- Tambahan -->
        </tr>
    </thead>

    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ Str::limit($project->description, 50) }}</td>
            <td>{{ $project->tech_stack }}</td>
            <td><a href="{{ $project->link }}" target="_blank">Lihat</a></td>
            <td class="d-flex gap-1">
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-primary">Edit</a>

                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin hapus project ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
@endif
@endsection