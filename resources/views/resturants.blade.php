@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    {{--     <all-resturants></all-resturants> --}}
    @include('partials.livery-access-gif')
    <places :categories='@json([config('services.categories.restaurants_slugs')])' default-image="/images/default-hotel.avif"></places>
@endsection
