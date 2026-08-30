@extends('layout.main')
@section('seo_title', 'About Us | Precision Plastic Engineering | NIRVA Technoplast')
@section('seo_description', 'NIRVA Technoplast Private Limited is a precision injection-moulding company focused on medical-grade nebulizer masks, adult and pediatric variants, high-volume production and OEM / private-label supply.')
@section('seo_keywords', 'about NIRVA Technoplast, plastic manufacturing company Surat, precision injection moulding, medical-grade nebulizer masks, OEM manufacturer India')
@section('breadcrumbTitle', 'About Us')
@section('breadcrumbActive', 'About')
@section('content')
    @include('components.about')

    <!-- Solutions & Value Proposition Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Solutions & Value Proposition</h5>
                <h1 class="mb-0">Precision Manufacturing for Healthcare Supplier</h1>
            </div>
            <p class="text-center text-muted mb-5 mx-auto" style="max-width: 800px;">NIRVA TECHNOPLAST PRIVATE LIMITED
                focuses on precision manufacturing of high-quality nebulizer masks, delivering cost-efficient and scalable
                solutions for medical-device OEMs, hospitals and healthcare suppliers.</p>
            <div class="row g-5">
                <div class="col-lg-6">
                    <h4 class="mb-4">Major Solutions We Offer</h4>
                    <div class="row g-3">
                        @php
                            $majors = [
                                'Adult Nebulizer Masks',
                                'Pediatric Nebulizer Masks',
                                'Medical-Grade Moulding',
                                'High-Volume Production',
                                'OEM / Private-Label Supply',
                            ];
                        @endphp
                        @foreach ($majors as $major)
                            <div class="col-sm-6">
                                <div class="bg-light rounded p-3 h-100 d-flex align-items-center">
                                    <i class="fa fa-check-circle text-primary me-3"></i>
                                    <h6 class="mb-0">{{ $major }}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="mb-4">Business Values We Provide</h4>
                    <div class="row g-3">
                        @php
                            $values = [
                                'Comfortable & Reliable Usage',
                                'Child-Friendly Solutions',
                                'Consistent Product Quality',
                                'Competitive Unit Cost',
                                'Scalable & Recurring Supply',
                            ];
                        @endphp
                        @foreach ($values as $value)
                            <div class="col-sm-6">
                                <div class="bg-light rounded p-3 h-100 d-flex align-items-center">
                                    <i class="fa fa-check-circle text-primary me-3"></i>
                                    <h6 class="mb-0">{{ $value }}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions & Value Proposition End -->

    <!-- Market Problems Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-3">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">From Manufacturing Complexity to Precision, Quality & Reliability</h1>
                <p class="mb-5">Overcoming Precision Manufacturing Challenges with Integrated Engineering Solutions.</p>
            </div>
            <div class="row g-4">
                @php
                    $problems = [
                        ['icon' => 'bi bi-cash-coin', 'title' => 'High Tooling Cost', 'desc' => 'Expensive mould development made manageable through in-house mould engineering.'],
                        ['icon' => 'bi bi-shield-exclamation', 'title' => 'Quality Variations', 'desc' => 'Defects and component rejection reduced with consistent process control.'],
                        ['icon' => 'bi bi-diagram-3', 'title' => 'Multiple Vendors', 'desc' => 'Longer lead times and coordination simplified with integrated manufacturing.'],
                        ['icon' => 'bi bi-bullseye', 'title' => 'Limited Precision', 'desc' => 'Difficulty producing complex custom parts solved by precision injection moulding.'],
                    ];
                @endphp
                @foreach ($problems as $index => $problem)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="{{ $problem['icon'] }} text-dark"></i>
                            </div>
                            <h5 class="mb-3">{{ $problem['title'] }}</h5>
                            <p class="mb-4">{{ $problem['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Market Problems End -->

    @include('components.features')
    @include('components.team')
    @include('components.vendor')
@endsection