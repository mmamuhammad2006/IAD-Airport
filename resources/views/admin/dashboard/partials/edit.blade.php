@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="container pt-5 p-0">
            <div class="col-12 p-0">
                <div class="px-3 m-auto">
                    @session('success')
                        <div class="alert alert-success pb-3" role="alert">
                            {{ session('success') }}
                        </div>
                    @endsession
                    @session('errors')
                    @endsession
                    <form action="{{ route('blogs.update',['blog' => $blog->id]) }}" method="POST" class="p-5 rounded-5 bg-cyan">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <div class="mb-3 col-11">
                                    <label for="formGroupExampleInput" class="form-label text-white">Title</label>
                                    @method('PUT')
                                    <input value="{{ $blog->title }}" type="text" name="title" class="form-control col-11"
                                        id="formGroupExampleInput" placeholder="Title">
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <div class="mb-3 col-11">
                                    <label for="formGroupExampleInput" class="form-label text-white">Date</label>
                                    <input value="{{ $blog->date }}" type="date" name="date" class="form-control col-11"
                                        id="formGroupExampleInput" placeholder="Example input placeholder">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label text-white">Description</label>
                            <textarea id="editor" name="body" class="form-control"
                                placeholder="Another input placeholder">{{ $blog->body }}</textarea>
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
        .create( document.querySelector( '#editor' ), {
            plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            }
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
</script>
@endpush
