@extends('layout.main')
@section('seo_title', 'OEM & Private Label Manufacturing | NIRVA Technoplast')
@section('seo_description', 'NIRVA Technoplast supports medical-device OEMs, hospitals, distributors and private-label brands with scalable nebulizer-mask manufacturing - from sampling to recurring bulk production.')
@section('seo_keywords', 'OEM manufacturing, private label manufacturing, medical device OEM, nebulizer mask OEM, private label nebulizer, scalable production, NIRVA Technoplast')
@section('breadcrumbTitle', 'OEM & Private Label')
@section('breadcrumbActive', 'OEM')
@section('content')

    <!-- OEM Intro Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">OEM / Private Label</h5>
                <h1 class="mb-0">OEM & Private-Label Manufacturing</h1>
            </div>
            <p class="text-center text-muted mb-5 mx-auto" style="max-width: 800px;">NIRVA supports medical-device
                OEMs, hospitals, distributors and private-label healthcare brands with scalable nebulizer-mask
                manufacturing. From sampling to recurring bulk production, we deliver customization, consistent
                quality and cost-efficient supply at every volume.</p>
            <div class="row g-4">
                @php
                    $oemValue = [
                        ['icon' => 'fa fa-sliders-h', 'title' => 'Customization Support', 'desc' => 'Tailored component and packaging options per requirement.'],
                        ['icon' => 'fa fa-industry', 'title' => 'Scalable Production', 'desc' => 'High-volume moulding capacity that grows with your orders.'],
                        ['icon' => 'fa fa-check-circle', 'title' => 'Consistent Quality', 'desc' => 'Every batch meets the same quality standard.'],
                        ['icon' => 'fa fa-rupee-sign', 'title' => 'Cost-Efficient Manufacturing', 'desc' => 'Optimized processes for competitive unit cost.'],
                        ['icon' => 'fa fa-tags', 'title' => 'Private-Label Support', 'desc' => 'Your brand, our precision manufacturing.'],
                        ['icon' => 'fa fa-arrow-repeat', 'title' => 'Recurring Supply', 'desc' => 'Dependable, committed timelines for repeat orders.'],
                    ];
                @endphp
                @foreach ($oemValue as $index => $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.1) }}s">
                        <div class="bg-light rounded p-4 shadow-sm h-100">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="{{ $item['icon'] }} text-white"></i>
                            </div>
                            <h5 class="mb-2">{{ $item['title'] }}</h5>
                            <p class="text-muted mb-0">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- OEM Intro End -->

    <!-- OEM Process Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-3 mb-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Process</h5>
                <h1 class="mb-0">How We Work With You</h1>
            </div>
            <div class="row g-4 text-center">
                @php
                    $steps = [
                        ['num' => '1', 'icon' => 'bi bi-chat-square-text', 'title' => 'Requirement Discussion', 'desc' => 'Understand your spec, volumes and labelling.'],
                        ['num' => '2', 'icon' => 'bi bi-box-seam', 'title' => 'Sampling', 'desc' => 'Precision samples for your evaluation.'],
                        ['num' => '3', 'icon' => 'bi bi-clipboard-check', 'title' => 'Product Evaluation / Approval', 'desc' => 'Approve quality, fit and material.'],
                        ['num' => '4', 'icon' => 'bi bi-gear-wide-connected', 'title' => 'Bulk Production', 'desc' => 'High-volume manufacture at scale.'],
                        ['num' => '5', 'icon' => 'bi bi-arrow-repeat', 'title' => 'Repeat Orders', 'desc' => 'Recurring, reliable supply.'],
                    ];
                @endphp
                @foreach ($steps as $index => $step)
                    <div class="col-lg col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.15) }}s">
                        <div class="bg-white rounded p-4 shadow-sm h-100">
                            <div class="position-relative d-inline-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold mb-3" style="width: 50px; height: 50px;">
                                {{ $step['num'] }}
                            </div>
                            <h6 class="mb-2">{{ $step['title'] }}</h6>
                            <small class="text-muted">{{ $step['desc'] }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- OEM Process End -->

    <!-- Kit & Products Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="fw-bold text-primary text-uppercase mb-2">Higher Value Kits</h5>
                    <h1 class="display-6 mb-4">Complete Nebulization Kits for OEM & Private Label</h1>
                    <p class="mb-4">Instead of only the mask, complete nebulization kits offer higher value per set for
                        brands and institutional buyers. Kits are assembled on automated / semi-automated lines for
                        speed, consistency and better unit economics.</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Mask</span>
                        <span class="badge bg-secondary rounded-pill px-3 py-2 fs-6">Medicine Cup</span>
                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Air Tube</span>
                        <span class="badge bg-secondary rounded-pill px-3 py-2 fs-6">Mouthpiece</span>
                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Filter / Accessories</span>
                    </div>
                    <a href="{{ route('product-page') }}" class="btn btn-primary py-3 px-5">Explore Our Products</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100 rounded shadow" src="{{ asset('front/img/carousel-1.jpg') }}" alt="Precision Manufacturing">
                </div>
            </div>
        </div>
    </div>
    <!-- Kit & Products End -->
@endsection