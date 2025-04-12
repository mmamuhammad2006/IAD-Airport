@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    <div class="container-fluid py-5 px-sm-0 px-3">
        <div class="container m-auto py-5">
            <div class="col-12">
                <div class="boxes mt-lg-0 mt-5">
                    <div class="col-12 d-flex flex-wrap blogsDiv">
                        {{-- box --}}
                        @foreach ($blogs as $blog)
                            <div class="box col-lg-4 col-sm-8 col-12 py-3 m-auto">
                                <div class="col-lg-11 rounded-5 bg-white shadow">
                                    @if ($blog->img)
                                        <div class="img">
                                            <div class="col-12">
                                                <img class="h-100 w-100 rounded-top-5 min-max-h-250 object-fit-cover"
                                                    src="{{ asset('storage/uploads/' . $blog->img) }}" alt=""
                                                    srcset="">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="content px-4 py-5 min-h-306 d-flex flex-column justify-content-between">
                                        <div class="head pb-3">
                                            <div class="col-12">
                                                <h5 class="m-0">{{ $blog->title }}</h5>
                                            </div>
                                        </div>
                                        <div class="para pb-3 text-truncate-line3">
                                            <div class="col-12">
                                                <a href="{{ route('show_single_blog', [$blog->id]) }}"
                                                    class="m-0 text-truncate-line4 cursor-pointer text-decoration-none text-dark">
                                                    {!! $blog->body !!}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="date">
                                            <div class="col-12">
                                                <p class="m-0 text-orange fw-bold">
                                                    {{ $blog->date }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
