@extends('layout.main')
@section('seo_title', 'NIRVA Technoplast | Precision Plastic Engineering for Healthcare & Industry')
@section('seo_description', 'NIRVA Technoplast Private Limited delivers precision injection moulding and scalable manufacturing of medical-grade nebulizer masks, custom plastic components and OEM / private-label supply for healthcare and industry.')
@section('seo_keywords', 'precision plastic engineering, injection moulding, nebulizer masks, medical-grade manufacturing, OEM supply, private label, respiratory care, NIRVA Technoplast, Surat')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "NIRVA Technoplast Private Limited",
    "url": "{{ url('/') }}",
    "description": "Precision plastic engineering and manufacturing solutions for healthcare and industry - nebulizer masks, custom plastic components and OEM / private-label supply."
}
</script>
@endpush
@section('content')
    <!-- Carousel Start -->

    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('front/img/carousel-1.jpg') }}" alt="Precision plastic engineering for healthcare and industry">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Precision Plastic Engineering for Healthcare & Industry</h1>
                                    <p class="mb-4 animated slideInRight">Precision injection moulding and scalable manufacturing
                                        solutions for healthcare, respiratory-care and industrial applications.</p>
                                    <div class="d-flex flex-wrap gap-2 mb-4 animated slideInRight">
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Medical-Grade Quality</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">High-Volume Production</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">OEM & Private Label Supply</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">On-Time Delivery</span>
                                    </div>
                                    <a href="{{ route('contact-page') }}" class="btn btn-primary py-3 px-5 animated slideInRight me-2">Discuss Your Requirement</a>
                                    <a href="{{ route('about-page') }}" class="btn btn-light py-3 px-5 animated slideInRight">About NIRVA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('front/img/carousel-2.jpg') }}" alt="Adult and pediatric nebulizer masks manufactured by NIRVA Technoplast">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Nebulizer Masks | Precision • Comfort • Reliable Breathing</h1>
                                    <p class="mb-4 animated slideInLeft">Reliable adult and pediatric nebulizer masks manufactured
                                        with suitable medical-grade plastic materials - built for high-volume, cost-efficient production.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-end mb-4 animated slideInLeft">
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Adult & Pediatric Variants</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Medical-Grade Materials</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">OEM & Private Label</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Consistent Quality</span>
                                    </div>
                                    <a href="{{ route('product-page') }}" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore Nebulizer Masks</a>
                                    <a href="{{ route('oem-page') }}" class="btn btn-light py-3 px-5 animated slideInLeft">OEM / Private Label</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Carousel End -->


    <!-- Market Facts Start -->

    @include('components.facts')

    <!-- Market Facts End -->


    <!-- About Start -->

    @include('components.about')

    <!-- About End -->


    <!-- What We Offer Start -->

    @include('components.services')

    <!-- What We Offer End -->


    <!-- Why NIRVA Start -->

    @include('components.features')

    <!-- Why NIRVA End -->


    <!-- Products Start -->

    @include('components.products')

    <!-- Products End -->


    <!-- Market Stats Start -->

    @include('components.market-stats')

    <!-- Market Stats End -->


    <!-- Team Start -->

    @include('components.team')

    <!-- Team End -->


    <!-- Industries Start -->

    @include('components.vendor')

    <!-- Industries End -->


    <!-- Commitments Start -->

    @include('components.testimonial')

    <!-- Commitments End -->
@endsection
