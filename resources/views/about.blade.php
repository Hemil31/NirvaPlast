@extends('layout.main')
@section('title', 'About Us')
@section('breadcrumbTitle', 'About Us')
@section('breadcrumbActive', 'About')
@section('content')
    @include('components.about')
    @include('components.team')
    @include('components.testimonial')
@endsection
