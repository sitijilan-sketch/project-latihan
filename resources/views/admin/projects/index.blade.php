@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-normal text-secondary mb-0">Data Projects</h3>
    <a href="{{ route('projects.create') }}" class="btn btn-primary px-3 shadow-sm">Tambah Project</a>
</div>

<div class="card border-0 shadow-sm p-3 rounded-3">
    <div class="table-responsive">
        <table id="projectsTable" class="table table-bordered align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th width="4%" class="text-center">No</th>
                    <th width="12%">Image</th>
                    <th width="18%">Title</th>
                    <th width="16%">Teknologi</th>
                    <th width="32%">Description</th>
                    <th width="8%" class="text-center">Status</th>
                    <th width="10%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $index => $project)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td class="text-center">
                        @if($project->image)
                            <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="img-thumbnail" style="max-height: 55px; object-fit: cover;">
                        @else
                            <span class="text-muted small">No Image</span>
                        @endif
                    </td>
                    <td class="fw-medium">{{ $project->title }}</td>
                    <td>{{ $project->teknologi }}</td>
                    <td class="small text-muted">{{ Str::limit($project->description, 60) }}</td>
                    <td class="text-center">
                        @if(strtolower($project->status) == 'active')
                            <span class="badge bg-success px-2 py-1">active</span>
                        @else
                            <span class="badge bg-secondary px-2 py-1">archived</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm text-white px-2 py-1">Edit</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm px-2 py-1" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#projectsTable').DataTable({
            "language": {
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:"
            }
        });
    });
</script>
@endpush
