<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

<body>
    <div class="container-fluid  bg-purple">
        <div class="container">
            <div class="col-12">
                <section class="">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-xl-10">
                                <div class="card rounded-5">
                                    <div class="row g-0">
                                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                                alt="login form" class="img-fluid rounded-start-5 object-fit-cover" />
                                        </div>
                                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                            <div class="card-body p-4 p-lg-5 text-black">

                                                <form action="{{ route('register') }}" method="POST">
                                                    @csrf

                                                    <h5 class="fw-bold mb-3 pb-3">Register into your account</h5>

                                                    <div data-mdb-input-init class="form-outline mb-4">
                                                        <label class="form-label" for="form2Example17">Name</label>
                                                        <input type="text" id="form2Example17" name="name"
                                                            class="form-control form-control-lg" />
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div data-mdb-input-init class="form-outline mb-4">
                                                        <label class="form-label" for="form2Example17">Email
                                                            address</label>
                                                        <input type="email" id="form2Example17" name="email"
                                                            class="form-control form-control-lg" />
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div data-mdb-input-init class="form-outline mb-4">
                                                        <label class="form-label" for="form2Example27">Password</label>
                                                        <input type="password" id="form2Example27" name="password"
                                                            class="form-control form-control-lg" />
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="pt-1 mb-4">
                                                        <button class="btn btn-dark btn-lg btn-block"
                                                            type="submit">Register</button>
                                                    </div>

                                                    <p class="mb-2 pb-lg-2">Already have an account? <a
                                                            href="{{ url('/admin/login') }}"
                                                            class="text-decoration-none">Login here</a></p>

                                                    <a href="#!"
                                                        class="small text-muted text-decoration-none">Terms of use.</a>
                                                    <a href="#!"
                                                        class="small text-muted text-decoration-none">Privacy policy</a>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</body>

</html>
