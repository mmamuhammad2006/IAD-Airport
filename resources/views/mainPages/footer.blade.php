<div class="container-fluid bg-darkBlack text-white px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-3">
    <div class="container m-auto">
        <footer class="py-5">
            {{-- error --}}
            @if (Session::has('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- error --}}
            <div class="row d-flex justify-content-between">
                <div
                    class="my-5 col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mb-3 text-center text-sm-center text-md-start">
                    <h4 class="fw-bold pb-3">Home</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="/about-us"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">About
                                us</a></li>
                        <li class="nav-item mb-2"><a href="/privacy-policy"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Privacy
                                Policy</a></li>
                        <li class="nav-item mb-2"><a href="terms-of-use"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Terms
                                of Use</a></li>
                        <li class="nav-item mb-2"><a href="contact-us"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Contact
                                us</a></li>
                    </ul>
                </div>

                <div
                    class="my-5 col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 mb-3 text-center text-sm-center text-md-start">
                    <h4 class="fw-bold pb-3">Others</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/vip-lounge-access"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Vip
                                lounge</a>
                        </li>
                        <li class="nav-item mb-2"><a href="/terminal-concourses"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Terminal
                                Concourses</a>
                        </li>
                        <li class="nav-item mb-2"><a href="/blog"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Blogs
                            </a>
                        </li>
                        <li class="nav-item mb-2"><a href="/faqs"
                                class="nav-link p-0 text-white fw-bold hover-zoom transform-origin-center">Faq</a>
                        </li>
                    </ul>
                </div>

                <div class="my-5 col-md-5 offset-md-1 mb-3 text-center text-sm-center text-md-start">
                    <form action="{{ url('/subscription') }}" method="POST">
                        @csrf
                        <h4 class="fw-bold py-1">Subscribe to our newsletter</h4>
                        <p class="py-1">Monthly digest of what's new and exciting from us.</p>
                        <div class="">
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" name="email" type="email" class="form-control px-3 py-2"
                                    placeholder="Email address" required>
                                <button class="btn px-3 py-2 text-white bg-darkParrot hover-zoom"
                                    type="submit">Subscribe</button>
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center pt-4 mt-4 border-top border-white">
                <p class="pb-2">This is not the official website of the Dulles Airport. That we have no affiliation or
                    link with
                    Dulles Airport.</p>
                <small><strong>Disclaimer Notice:</strong> This website is an informational guide and is not sponsored
                    by, endorsed by,
                    associated with, or affiliated with the Metropolitan Washington Airports Authority, and that
                    visitors intending to reach the official site should visit <a target="_blank"
                        href="https://www.flydulles.com/">flydulles.com</a></small>
            </div>
        </footer>
    </div>
</div>
