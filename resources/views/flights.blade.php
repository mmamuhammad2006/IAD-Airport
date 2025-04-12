@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    {{-- @dd($flight) --}}
    @include('partials.livery-access-gif')

    <flights flight="{{ $flight }}"></flights>
@endsection
