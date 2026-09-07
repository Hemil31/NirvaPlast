@extends('layout.main')
@section('seo_title', 'Market Insights | Precision Plastic Manufacturing Market | NIRVA Technoplast')
@section('seo_description', 'Precision plastic manufacturing market insights - global and India injection moulded plastics market sizing, growth, OEM demand, manufacturing opportunity and supply strategy from NIRVA Technoplast.')
@section('seo_keywords', 'injection moulded plastics market, plastic manufacturing market India, precision moulding demand, OEM plastic supply, contract manufacturing, NIRVA Technoplast')
@section('breadcrumbTitle', 'Market Insights')
@section('breadcrumbActive', 'Market')
@section('content')

    <!-- Precision Plastic Manufacturing Market Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Growing Precision Plastic Manufacturing Market</h5>
                <h1 class="mb-0">Injection Moulding Market Opportunity</h1>
            </div>

            <div class="row g-4 mb-5">
                @php
                    $marketStats = [
                        ['value' => '$23.31B', 'label' => 'India Injection Molded Plastics — 2024'],
                        ['value' => '$38.13B', 'label' => 'India Market Forecast — 2030'],
                        ['value' => '5.5% CAGR', 'label' => 'India Forecast Growth'],
                        ['value' => '$362.5B', 'label' => 'Global Injection Molded Plastics — 2025'],
                    ];
                @endphp
                @foreach ($marketStats as $index => $stat)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.1) }}s">
                        <div class="bg-light rounded p-4 shadow-sm h-100">
                            <h2 class="text-primary mb-2">{{ $stat['value'] }}</h2>
                            <p class="text-muted mb-0">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <h4 class="mb-3">Demand Drivers & Market Gaps</h4>
                    <p class="text-muted">Demand for precision plastic components is driven by automotive, packaging,
                        electronics, healthcare and industrial manufacturing. OEMs increasingly require reliable
                        suppliers capable of custom mould development, precision components and scalable production.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle bg-white">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th class="text-white">Market Driver</th>
                                    <th class="text-white">What OEMs Need</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Precision & consistent component quality</td>
                                    <td>Repeatable tolerances across every batch</td>
                                </tr>
                                <tr>
                                    <td>Customized moulding solutions</td>
                                    <td>In-house mould development & tooling support</td>
                                </tr>
                                <tr>
                                    <td>Faster product development</td>
                                    <td>Prototype-to-production conversion</td>
                                </tr>
                                <tr>
                                    <td>Cost-efficient manufacturing</td>
                                    <td>High-volume production at competitive unit cost</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mt-3">Market figures are industry estimates based on published plastics
                        market research. Please verify figures before making business decisions.</p>
                </div>
                <div class="col-lg-5">
                    <h4 class="mb-3">Integrated Manufacturing Advantage</h4>
                    <p class="text-muted">Instead of coordinating multiple vendors, integrated tooling, machining and
                        moulding under one roof reduces lead times, quality variation and total cost.</p>
                    <div class="bg-light rounded p-4 shadow-sm mb-3">
                        <h6 class="text-primary mb-3">Our End-to-End Capabilities</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Precision Moulding</span>
                            <span class="badge bg-secondary rounded-pill px-3 py-2">Mould Development</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2">CNC Machining</span>
                            <span class="badge bg-secondary rounded-pill px-3 py-2">Custom Components</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2">Assembly</span>
                        </div>
                    </div>
                    <div class="bg-light rounded p-4 shadow-sm">
                        <h6 class="text-primary mb-2">Core Market Question</h6>
                        <p class="mb-0">"Can manufacturers deliver precision, customization and consistent quality at
                            competitive costs?" - NIRVA's answer is an integrated engineering approach.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow-sm h-100">
                        <h4 class="text-primary mb-3"><i class="fa fa-tasks me-2"></i>Key Takeaways</h4>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>High volume, recurring demand across multiple industries.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Integrated engineering reduces vendor coordination.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Focus on OEM supply, institutional orders & private label.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Export opportunities to global markets.</li>
                            <li class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Growth driven by precision, customization & cost efficiency.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow-sm h-100">
                        <h4 class="text-primary mb-3"><i class="fa fa-industry me-2"></i>Manufacturer Capabilities Required</h4>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>High-cavity moulds for efficient output</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Automated / Semi-automated Assembly</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Suitable plastic materials (PVC / PP / TPE)</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Adult & Paediatric variants</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Sterile / Non-sterile variants</li>
                            <li class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>OEM / Private Label supply</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Precision Plastic Manufacturing Market End -->

    <!-- Competition Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Competition & Differentiation</h5>
                <h2 class="mb-0">Our Edge Over Existing Manufacturers</h2>
            </div>
            <div class="row g-4 mb-5">
                @php
                    $challenges = [
                        ['icon' => 'bi bi-shield-exclamation', 'title' => 'Inconsistent Quality', 'desc' => 'Variation in material and product consistency.'],
                        ['icon' => 'bi bi-sliders', 'title' => 'Limited Customization', 'desc' => 'Fewer options for OEM and private-label requirements.'],
                        ['icon' => 'bi bi-currency-rupee', 'title' => 'Cost Pressure', 'desc' => 'Competitive pricing makes efficient high-volume production essential.'],
                        ['icon' => 'bi bi-truck', 'title' => 'Supply Reliability', 'desc' => 'Institutional buyers require continuous and timely bulk availability.'],
                    ];
                @endphp
                @foreach ($challenges as $index => $challenge)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="{{ $challenge['icon'] }} text-dark"></i>
                            </div>
                            <h5 class="mb-3">Challenges Faced by Competitors</h5>
                            <h6 class="text-primary mb-2">{{ $challenge['title'] }}</h6>
                            <p class="mb-4">{{ $challenge['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded p-4 shadow-sm">
                        <h4 class="text-white mb-3">Our Edge</h4>
                        <div class="row g-3">
                            @php
                                $edges = ['Precision Manufacturing', 'Custom Component Capability', 'High-Volume Production', 'OEM & Private-Label Supply', 'Cost-Effective & Reliable Delivery'];
                            @endphp
                            @foreach ($edges as $edge)
                                <div class="col-lg col-md-4 col-sm-6">
                                    <div class="bg-white bg-opacity-10 rounded p-3 h-100 text-center">
                                        <i class="fa fa-check-circle text-white mb-2"></i>
                                        <h6 class="text-white mb-0">{{ $edge }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Competition End -->

    <!-- Target Market Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Target Market</h5>
                <h2 class="mb-0">Who We Serve</h2>
            </div>
            <div class="row g-4 mb-5">
                @php
                    $segments = [
                        ['icon' => 'fa fa-industry', 'title' => 'OEM Manufacturers', 'desc' => 'Plastic component & product brands.'],
                        ['icon' => 'fa fa-user-md', 'title' => 'Institutional Buyers', 'desc' => 'Regular established-use requirements.'],
                        ['icon' => 'fa fa-truck-loading', 'title' => 'Distributors & Wholesalers', 'desc' => 'Bulk industrial supply.'],
                        ['icon' => 'fa fa-globe-asia', 'title' => 'Export Buyers', 'desc' => 'International industrial distributors.'],
                    ];
                @endphp
                @foreach ($segments as $index => $segment)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="bg-light rounded p-4 shadow-sm h-100 text-center">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                                <i class="{{ $segment['icon'] }} text-white"></i>
                            </div>
                            <h5 class="mb-2">{{ $segment['title'] }}</h5>
                            <p class="text-muted mb-0">{{ $segment['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-light rounded p-4 shadow-sm text-center">
                        <h5 class="text-primary mb-3">Buyer Journey / Commercial Process</h5>
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                            <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Requirement</span><i class="bi bi-arrow-right text-primary"></i>
                            <span class="badge bg-secondary rounded-pill px-3 py-2 fs-6">Sampling</span><i class="bi bi-arrow-right text-primary"></i>
                            <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Approval</span><i class="bi bi-arrow-right text-primary"></i>
                            <span class="badge bg-secondary rounded-pill px-3 py-2 fs-6">Bulk Production</span><i class="bi bi-arrow-right text-primary"></i>
                            <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Repeat Orders</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Target Market End -->

    <!-- Why NIRVA for This Market Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Why NIRVA</h5>
                <h2 class="mb-0">Built for This Market</h2>
            </div>
            <div class="row g-4">
                @php
                    $marketAdvantages = [
                        ['icon' => 'fa fa-industry', 'title' => 'High-Volume Moulding', 'desc' => 'Capacity to meet recurring bulk demand efficiently and consistently.'],
                        ['icon' => 'fa fa-shield-alt', 'title' => 'Consistent Quality', 'desc' => 'Reliable materials and process control on every batch.'],
                        ['icon' => 'fa fa-tags', 'title' => 'OEM & Private Label', 'desc' => 'Your brand on custom components and assemblies.'],
                        ['icon' => 'fa fa-globe-asia', 'title' => 'Export-Ready Supply', 'desc' => 'Dependable supply for global markets.'],
                    ];
                @endphp
                @foreach ($marketAdvantages as $index => $advantage)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.1) }}s">
                        <div class="bg-light rounded p-4 text-center shadow-sm h-100">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 60px; height: 60px;">
                                <i class="{{ $advantage['icon'] }} text-white"></i>
                            </div>
                            <h5 class="mb-2">{{ $advantage['title'] }}</h5>
                            <p class="text-muted mb-0">{{ $advantage['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4 class="mb-3">Ready to capture recurring demand with a reliable manufacturing partner?</h4>
                    <a href="{{ route('contact-page') }}" class="btn btn-primary py-3 px-5 rounded-pill">Discuss Your Requirement</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Why NIRVA for This Market End -->

    <p class="text-center text-muted small mb-0 py-4">Market figures and pricing shown on this page are estimates based on
        company materials and industry observations. Please verify before making business decisions.</p>
@endsection