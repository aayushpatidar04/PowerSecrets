@extends('layouts.app')

@section('styles')
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Blogs</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBlogModal">
                <i class="bi bi-plus-circle"></i> Add Blog
            </button>
        </div>

        <div class="table-responsive">
            <table id="blogsTable" class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->title }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning editBtn" data-id="{{ $blog->id }}"
                                    data-title="{{ $blog->title }}" data-slug="{{ $blog->slug }}"
                                    data-short="{{ $blog->short_description }}" data-content="{{ $blog->content }}"
                                    data-category="{{ $blog->category }}"
                                    data-meta_description="{{ $blog->meta_description }}"
                                    data-meta_keywords="{{ $blog->meta_keywords }}" data-bs-toggle="modal"
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
                    <h5 class="modal-title">Add Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('add-blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" name="slug" value="{{ old('slug') }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Description <span class="text-danger">*</span></label>
                            <textarea name="short_description" class="form-control" required>{{ old('short_description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content <span class="text-danger">*</span></label>
                            <textarea id="summernoteAdd" name="content" required>{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <input type="text" name="category" value="{{ old('category') }}" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Description <span class="text-danger">*</span></label>
                            <textarea name="meta_description" class="form-control" required>{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                            <input type="text" name="meta_keywords" class="form-control"
                                value="{{ old('meta_keywords') }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Save Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Blog Modal (single reusable modal) -->
    <div class="modal fade" id="editBlogModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ Route('edit-blog') }}" id="editBlogForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editBlogId" name="id" required>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="editTitle" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="editSlug" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                            <textarea name="short_description" id="editShort" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" id="editContent" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" id="editCategory" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <input type="text" name="meta_description" id="editMetaDescription" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" id="editMetaKeywords" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update Blog</button>
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
                placeholder: 'Write blog content here...'
            });

            // Initialize Summernote for edit modal
            $('#editContent').summernote({
                height: 250,
                placeholder: 'Edit blog content here...'
            });

            // Prefill modal when Edit button is clicked
            $('.editBtn').on('click', function() {
                let id = $(this).data('id');
                $('#editBlogId').val(id);
                $('#editTitle').val($(this).data('title'));
                $('#editSlug').val($(this).data('slug'));
                $('#editShort').val($(this).data('short'));
                $('#editCategory').val($(this).data('category'));
                $('#editMetaDescription').val($(this).data('meta_description'));
                $('#editMetaKeywords').val($(this).data('meta_keywords'));

                // Set Summernote content
                $('#editContent').summernote('code', $(this).data('content'));

            });
        });
    </script>
@endsection
