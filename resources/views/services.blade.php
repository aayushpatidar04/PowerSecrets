@extends('layouts.app')

@section('styles')
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Services</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBlogModal">
                <i class="bi bi-plus-circle"></i> Add Service
            </button>
        </div>

        <div class="table-responsive">
            <table id="blogsTable" class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Service</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn" data-id="{{ $service->id }}"
                                    data-name="{{ $service->name }}" data-slug="{{ $service->slug }}"
                                    data-content="{{ $service->content }}" data-bs-toggle="modal"
                                    data-bs-target="#editBlogModal">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Blog Modal -->
    <div class="modal fade" id="addBlogModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('add-service') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea id="summernoteAdd" name="content" required>{{ old('content') }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Blog Modal (single reusable modal) -->
    <div class="modal fade" id="editBlogModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ Route('edit-service') }}" id="editBlogForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editBlogId" name="id" required>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="editName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="editSlug" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" id="editContent" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#blogsTable').DataTable({
                responsive: true,
                pageLength: 10,
                order: [
                    [0, 'asc']
                ]
            });

            // Summernote for Add Blog
            $('#summernoteAdd').summernote({
                height: 250,
                placeholder: 'Write service content here...'
            });

            // Initialize Summernote for edit modal
            $('#editContent').summernote({
                height: 250,
                placeholder: 'Edit service content here...'
            });

            // Prefill modal when Edit button is clicked
            $('.editBtn').on('click', function() {
                let id = $(this).data('id');
                $('#editBlogId').val(id);
                $('#editName').val($(this).data('name'));
                $('#editSlug').val($(this).data('slug'));

                // Set Summernote content
                $('#editContent').summernote('code', $(this).data('content'));

            });
        });
    </script>
@endsection
