@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid py-5">
        <div class="container">
            <div class="col-12">
                <div class="box">
                    <div class="col-12 bg-white p-4 rounded-5">
                        <div class="head pb-3 bg-white">
                            <div class="col-12">
                                <h5 class=" pe-3 fw-bold text-gray">Title</h5>
                                {{ $blog->title }}
                            </div>
                        </div>
                        <div class="body bg-white">
                            <div class="col-12">
                                <h5 class="fw-bold text-gray" >Body</h5><span class="m-0 text-gray d-inline-block">{!! $blog->body !!}</span>
                            </div>
                        </div>
                        <div class="body bg-white">
                            <div class="col-12">
                                <h5 class="m-0 fw-bold text-gray">Date</h5>
                                <p class="m-0  text-gray">{{ $blog->date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
