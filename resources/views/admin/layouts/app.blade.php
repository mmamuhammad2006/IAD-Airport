<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor 5 - Quick start CDN</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    {{-- style.css --}}
    <link rel="stylesheet" href={{ asset('admin/style.css') }}>
    <!-- Bootstrap CSS v5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Ck Editor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<style>
    .main-container {
        width: 795px;
        margin-left: auto;
        margin-right: auto;
    }

    .ck-content {
        height: 150px !important;
        padding: 1rem 1rem !important;
    }
</style>

<body>

    <div id="app">
        <div class="col-12 p-0 d-flex bg-primaryy">
            <div class="col-2 p-0  bg-purple">
                @include('admin.partials.sidebar')
            </div>

            <div class="content col-10">
                <div class="container-fluid bg-white p-0">
                    <div class="m-auto p-0">
                        @include('admin.partials.header', ['bgDarkParrot' => true])
                    </div>
                </div>
                <div class="col-12 p-0">
                    @yield('content')

                </div>
            </div>


        </div>
    </div>

    @stack('scripts')
    <!-- Bootstrap JavaScript Libraries -->
    @vite(['resources/sass/app.scss', 'resources/js/Admin/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- waypoints cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
