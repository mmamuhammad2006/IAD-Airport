@extends('layouts.app')
@include('partials.metaTags')
@section('homeContent')
    {{-- @dd($content) --}}
    <div class="bg-img container-fluid position-relative overflow-hidden">
        <div class="container m-auto">
            @include('mainPages.navbar', ['bgDarkParrot' => false])
            @include('mainPages.heroSection', ['content' => $content])
        </div>
    </div>
    @include('mainPages', ['content' => $content])
    @include('mainPages.footer')
@endsection
