@extends('layouts.app')
@section('content')
    @include('partials.livery-access-gif')
<div class="container-fluid py-5">
    <div class="container m-auto py-5">
        <div class="col-12">
            <div class="box col-8 m-auto">
                <div class="col-11 rounded-5 bg-white shadow">
                    <div class="img">
                        <div class="col-12">
                            <img class="h-100 w-100 rounded-top-5 max-h-450 min-h-250 object-fit-cover" src="{{ asset('storage/uploads/'.$blog->img) }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="content px-4 py-5 d-flex flex-column justify-content-between">
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="m-0">{{ $blog->title }}</h3>
                            </div>
                        </div>
                        <div class="para pb-3">
                            <div class="col-12">
                                <a href="{{ route('show_single_blog',[$blog->id]) }}" class="m-0 cursor-pointer text-decoration-none text-dark">
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
        </div>
    </div>
</div>
@endsection
