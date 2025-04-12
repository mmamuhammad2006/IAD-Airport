@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    <div class="container-fluid contact-img d-flex align-items-center h-260 position-relative">
        <div class="container m-auto">
            <div class="col-12 text-white d-flex flex-column align-items-center justify-content-center">
                <div class="head1 py-2">
                    <div class="col-12">
                        <h5>Please contact us to get information</h5>
                    </div>
                </div>
                <div class="head2 py-2">
                    <div class="col-12">
                        <h1 class="fw-bold">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.livery-access-gif')
    <!-- contact form -->
    <div class="container-fluid bg-lightGray py-5 px-sm-0 px-3">
        <div class="container m-auto bg-white my-5">
            <div class="col-12">
                <div class="form-desc row">
                    <div class="form-cont col-lg-8 col-12 p-4">
                        <div class="col-12">
                            <div class="head py-3">
                                <div class="col-12 pb-3">
                                    <h3 class="text-darkParrot fw-bold">Contact Us</h3>
                                </div>
                            </div>
                            <form class="row">
                                <div class="mb-3 col-sm-6 col-12 pe-sm-2">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control px-3 py-2" placeholder="Name"
                                        aria-label="First name" id="Name">
                                </div>
                                <div class="mb-3 col-sm-6 col-12 ps-sm-2">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input type="email" class="form-control px-3 py-2" id="Email" placeholder="Email"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control p-2" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Please type your message here"></textarea>
                                </div>
                                <div class="py-2">
                                    <div
                                        class="btn rounded-5 border-2 border-darkParrot text-darkParrot py-2 px-5 m-auto hover-zoom bg-darkParrot-hover">
                                        Submit</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="desc-cont col-lg-4 col-12 bg-darkParrot text-white">
                        <div class="col-12 p-4">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3>24/7 support</h3>
                                </div>
                            </div>
                            <div class="desc">
                                <div class="col-12">
                                    <p>
                                        You can contact 24 hours and get connect with us . we are here to solve all your
                                        problems via songle email. Contact us through email
                                        <strong>admin@iadairport.com</strong> and get connected with us
                                    </p>
                                </div>
                            </div>
                            <div class="w-100 pb-5 mb-5 py-2">
                                <a href="privacyPolicy.html"
                                    class="btn rounded-5 border-2 border-white text-white py-2 px-5 m-auto hover-zoom bg-white-hover">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
