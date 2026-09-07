@extends('layout.main')
@section('seo_title', 'NIRVA Technoplast | Precision Injection Moulding & Plastic Engineering')
@section('seo_description', 'NIRVA Technoplast Private Limited - precision injection moulding and plastic engineering. Custom plastic components, mould development, CNC machining, high-volume production and OEM / private-label supply for every industry.')
@section('seo_keywords', 'precision injection moulding, plastic engineering, custom plastic components, mould development, CNC machining, high-volume production, OEM manufacturing, private label, contract manufacturing, NIRVA Technoplast')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "NIRVA Technoplast Private Limited",
    "url": "{{ url('/') }}",
    "description": "NIRVA Technoplast - precision injection moulding and plastic engineering for every industry. Precision moulding, mould development, CNC machining, custom plastic components and OEM / private-label supply."
}
</script>
@endpush
@section('content')
    <!-- Carousel Start -->

    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('front/img/carousel-1.jpg') }}" alt="Precision injection moulding and plastic engineering">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Precision Injection Moulding & Plastic Engineering</h1>
                                    <p class="mb-4 animated slideInRight">End-to-end plastic manufacturing solutions - precision moulding, mould development, CNC machining and custom plastic components for every industry.</p>
                                    <div class="d-flex flex-wrap gap-2 mb-4 animated slideInRight">
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Precision Manufacturing</span>
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
                    <img class="w-100" src="{{ asset('front/img/carousel-2.jpg') }}" alt="Custom plastic components manufactured by NIRVA Technoplast">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Engineered Plastic Products | Precision • Performance • Reliability</h1>
                                    <p class="mb-4 animated slideInLeft">Custom-moulded and precision-machined plastic components
                                        built for high-volume, cost-efficient production with consistent quality.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-end mb-4 animated slideInLeft">
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Custom Component Production</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Precision Moulding</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">OEM & Private Label</span>
                                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Consistent Quality</span>
                                    </div>
                                    <a href="{{ route('product-page') }}" class="btn btn-primary py-3 px-5 animated slideInLeft">Explore Products</a>
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
