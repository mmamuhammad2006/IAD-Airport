@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @php
        $categories = [
            config('services.categories.bus_station_slug'),
            config('services.categories.shipping_slug'),
            config('services.categories.taxis_slug'),
            config('services.categories.train_stations_slug'),
        ];
    @endphp
    @include('partials.livery-access-gif')
    <places :categories='@json($categories)' default-image="/images/carRental.jpg"></places>
@endsection
