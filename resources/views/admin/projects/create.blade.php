@extends('admin.template')

@section('content')
<style>
    input[type=file]::file-selector-button {
        content: "Browse...";
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-right: none;
        padding: 0.375rem 0.75rem;
        margin-right: 0.75rem;
        border-radius: 0.375rem 0 0 0.375rem;
        color: #212529;
    }
</style>

<div class="card border-0 shadow-sm p-4 rounded-3">
    <h3 class="mb-4 fw-normal">Tambah Project</h3>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <!-- Nama Project -->
            <div class="col-md-6 mb-3 mb-md-0">
                <label for="title" class="form-label text-secondary">Nama Project</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Teknologi -->
            <div class="col-md-6">
                <label for="teknologi" class="form-label text-secondary">Teknologi</label>
                <input type="text" class="form-control" id="teknologi" name="teknologi" required>
            </div>
        </div>

        <div class="row mb-3">
            <!-- Status -->
            <div class="col-md-6 mb-3 mb-md-0">
                <label for="status" class="form-label text-secondary">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="" selected disabled>Pilih Status</option>
                    <option value="active">active</option>
                    <option value="archived">archived</option>
                </select>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <label for="image" class="form-label text-secondary">Image</label>
                <div class="input-group">
                    <label class="input-group-text bg-light text-secondary" for="image" style="cursor: pointer;">Browse...</label>
                    <input type="file" class="form-control" id="image" name="image" style="display: none;" onchange="document.getElementById('file-name').textContent = this.files[0] ? this.files[0].name : 'No file selected.'">
                    <span class="form-control bg-white text-muted" id="file-name">No file selected.</span>
                </div>
            </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="form-label text-secondary">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <!-- Tombol Simpan & Batal -->
        <div>
            <button type="submit" class="btn btn-primary px-3 me-1">Simpan</button>
            <a href="{{ route('projects.index') }}" class="btn btn-danger px-3">Batal</a>
        </div>
    </form>
</div>
@endsection
