@extends('admin.template')

@section('content')
<div class="mt-3">
    <div class="card shadow-sm border-0 p-2">
        <div class="card-body">
            <h3 class="mb-4">Edit Project</h3>
            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Nama Project -->
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label text-secondary">Nama Project</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
                    </div>

                    <!-- Teknologi (Sudah Bahasa Indonesia) -->
                    <div class="col-md-6 mb-3">
                        <label for="teknologi" class="form-label text-secondary">Teknologi</label>
                        <input type="text" name="teknologi" id="teknologi" class="form-control" value="{{ $project->teknologi }}" required>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label text-secondary">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">Pilih Status</option>
                            <option value="active" {{ strtolower($project->status) === 'active' ? 'selected' : '' }}>active</option>
                            <option value="archived" {{ strtolower($project->status) === 'archived' ? 'selected' : '' }}>archived</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label text-secondary">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label text-secondary">Description</label>
                        <textarea name="description" id="description" rows="4" class="form-control" required>{{ $project->description }}</textarea>
                    </div>

                    <!-- Tombol Ubah & Batal -->
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary px-3">Ubah</button>
                        <a href="{{ route('projects.index') }}" class="btn btn-danger px-3">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
