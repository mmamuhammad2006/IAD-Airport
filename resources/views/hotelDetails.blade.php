@extends('layouts.app')
@section('title', $metatags['title'])
@section('description', $metatags['description'])
@section('keywords', $metatags['keywords'])
@section('canonical', $metatags['canonical'])
@section('content')
    @include('partials.livery-access-gif')
    <place-detail :place="'{{ $place }}'" :category="'{{ $category }}'"></place-detail>
@endsection
