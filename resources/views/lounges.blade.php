@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    <main>
        <div class="container-fluid resturants-img d-flex align-items-center h-260 position-relative overflow-hidden">
            <div class="container m-auto">
                <div class="col-12 text-white d-flex flex-column align-items-center justify-content-center">
                    <div class="head1 py-2">
                        <div class="col-12">
                            <h3 class="fs-3 pb-3 text-center">
                                Explore the worlds best Lounges
                            </h3>
                        </div>
                    </div>
                    <!-- <div class="text-center w-100">
                    <div class="btn rounded-5 border-2 text-white border-white py-2 px-5 m-auto hover-zoom bg-white-hover">
                        Explore</div>
                  </div> -->
                </div>
            </div>
        </div>
    @include('partials.livery-access-gif')
        <places :categories='@json([config('services.categories.lounges_slug')])' default-image="/images/default-resturant.jpg" />
    </main>
@endsection
