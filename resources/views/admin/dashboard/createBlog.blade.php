@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="container pt-5 p-0">
            <div class="col-12 p-0">
                <div class="px-5 m-auto">
                    <div class="head">
                        <div class="col-12">
                            <h3 class="m-0 pb-4 fw-bold">Create Blogs</h3>
                        </div>
                    </div>
                    @session('success')
                        <div class="alert alert-success pb-3" role="alert">
                            {{ session('success') }}
                        </div>
                    @endsession
                    @session('errors')
                    @endsession
                    <form action="{{ url('/admin/create/blog') }}" method="POST" enctype="multipart/form-data"
                        class="p-5 rounded-5 bg-white">
                        @csrf
                        <div class="d-flex flex-wrap">
                            <div class="mb-3 col-6">
                                <div class="mb-3 col-11">
                                    <label for="formGroupExampleInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control col-11 bg-white"
                                        id="formGroupExampleInput" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <div class="mb-3 col-11">
                                    <label for="formGroupExampleInput" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control col-11 bg-white"
                                        id="formGroupExampleInput" placeholder="Example input placeholder" required>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <div class="mb-3 col-11">
                                    <label for="formGroupExampleInput" class="form-label">Img</label>
                                    <input type="file" name="img" class="form-control col-11 bg-white"
                                        id="formGroupExampleInput" placeholder="Example input placeholder" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Description</label>
                            <textarea id="editor" type="text" name="body" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder" required></textarea>
                        </div>
                        <button type="submit" class="bg-pink mt-3 px-4 py-2 border-0 rounded-5 text-white">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
@endpush
