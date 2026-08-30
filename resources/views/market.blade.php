@extends('layout.main')
@section('seo_title', 'Market Insights | Nebulizer Mask Market in India | NIRVA Technoplast')
@section('seo_description', 'India nebulizer mask market insights - high-volume recurring demand, market sizing, manufacturing opportunity, competition and OEM supply strategy from NIRVA Technoplast.')
@section('seo_keywords', 'nebulizer mask market India, nebulizer market size, injection moulded plastics market, medical device manufacturing, OEM supply, NIRVA Technoplast')
@section('breadcrumbTitle', 'Market Insights')
@section('breadcrumbActive', 'Market')
@section('content')

    <!-- Nebulizer Mask Market Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">High Volume • Recurring Demand • Strong Growth Opportunity</h5>
                <h1 class="mb-0">Nebulizer Mask Market in India</h1>
            </div>

            <div class="row g-4 mb-5">
                @php
                    $nebStats = [
                        ['value' => '₹650–670 Cr', 'label' => 'India Nebulizer Market — 2025'],
                        ['value' => '₹1,250 Cr', 'label' => 'Market Forecast — 2033'],
                        ['value' => '8% CAGR', 'label' => 'Forecast Growth'],
                        ['value' => '₹50–120 Cr', 'label' => 'Mask / Accessories Market — 2025'],
                        ['value' => '2–5 Cr', 'label' => 'Masks Annual Demand'],
                        ['value' => '~₹134', 'label' => 'Average Retail Price per Mask'],
                    ];
                @endphp
                @foreach ($nebStats as $index => $stat)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.1) }}s">
                        <div class="bg-light rounded p-4 shadow-sm h-100">
                            <h2 class="text-primary mb-2">{{ $stat['value'] }}</h2>
                            <p class="text-muted mb-0">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <h4 class="mb-3">Potential Annual Demand & Opportunity</h4>
                    <p class="text-muted">Manufacturing opportunity modelled at approximately ₹15–25 per mask. India
                        represents ~86.6% of the total India & neighbouring countries nebulizer market.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle bg-white">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th class="text-white">Demand Scenario</th>
                                    <th class="text-white">Annual Demand</th>
                                    <th class="text-white">Manufacturing Opportunity @ ₹15–25 / mask</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Conservative</td>
                                    <td>2 Crore pcs / year</td>
                                    <td>₹30–50 Crore</td>
                                </tr>
                                <tr>
                                    <td>Base Case</td>
                                    <td>3–4 Crore pcs / year</td>
                                    <td>₹45–100 Crore</td>
                                </tr>
                                <tr>
                                    <td>Strong Market</td>
                                    <td>5+ Crore pcs / year</td>
                                    <td>₹75–125+ Crore</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mt-3">₹50–120 Cr and 2–5 Cr figures are market-sizing estimates based on
                        industry shipments, imports, retail pricing and demand patterns. Retail price is higher due to
                        packaging, distributor margin, retailer margin and GST.</p>
                </div>
                <div class="col-lg-5">
                    <h4 class="mb-3">Complete Kit Opportunity</h4>
                    <p class="text-muted">Instead of only the mask, complete nebulization kits offer higher value per
                        set.</p>
                    <div class="bg-light rounded p-4 shadow-sm mb-3">
                        <h6 class="text-primary mb-3">Typical Kit Includes</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Mask</span>
                            <span class="badge bg-secondary rounded-pill px-3 py-2">Medicine Cup</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2">Air Tube</span>
                            <span class="badge bg-secondary rounded-pill px-3 py-2">Mouthpiece</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2">Filter / Accessories</span>
                        </div>
                    </div>
                    <div class="bg-light rounded p-4 shadow-sm">
                        <h6 class="text-primary mb-2">Kit Retail Price</h6>
                        <h3 class="mb-3">₹121–₹185</h3>
                        <p class="mb-0 small">Institutional packs available at much lower per-unit cost. The gross
                            opportunity is in OEM supply @ ₹10–25 per piece, not retail.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow-sm h-100">
                        <h4 class="text-primary mb-3"><i class="fa fa-tasks me-2"></i>Key Takeaways</h4>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>High volume, recurring demand product.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Low cost, high turnover — ideal for injection moulding manufacturers.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Focus on OEM supply, institutional orders & private label.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Export opportunities to Bangladesh, Nepal, Africa & Middle East.</li>
                            <li class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Gross opportunity is in OEM supply @ ₹10–25 per piece, not retail.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow-sm h-100">
                        <h4 class="text-primary mb-3"><i class="fa fa-industry me-2"></i>Manufacturer Capabilities Required</h4>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>High-cavity moulds</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Automated / Semi-automated Assembly</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Medical-grade materials (PVC / PP / TPE)</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Adult & Paediatric variants</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Sterile / Non-sterile variants</li>
                            <li class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Hospital OEM / Private Label supply</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nebulizer Mask Market End -->

    <!-- Competition Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Competition & Differentiation</h5>
                <h1 class="mb-0">Our Edge Over Existing Manufacturers</h1>
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
                                $edges = ['Medical-Grade Manufacturing', 'Adult & Pediatric Variants', 'High-Volume Production', 'OEM & Private-Label Supply', 'Cost-Effective & Reliable Delivery'];
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
                <h1 class="mb-0">Who We Serve</h1>
            </div>
            <div class="row g-4 mb-5">
                @php
                    $segments = [
                        ['icon' => 'fa fa-hospital', 'title' => 'Medical Device Companies', 'desc' => 'Nebulizer & respiratory-care brands.'],
                        ['icon' => 'fa fa-user-md', 'title' => 'Hospitals & Clinics', 'desc' => 'Regular patient-use requirements.'],
                        ['icon' => 'fa fa-truck-loading', 'title' => 'Distributors & Wholesalers', 'desc' => 'Bulk medical supply.'],
                        ['icon' => 'fa fa-globe-asia', 'title' => 'Export Buyers', 'desc' => 'International healthcare distributors.'],
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
                <h1 class="mb-0">Built for This Market</h1>
            </div>
            <div class="row g-4">
                @php
                    $marketAdvantages = [
                        ['icon' => 'fa fa-industry', 'title' => 'High-Volume Moulding', 'desc' => 'Capacity to meet recurring bulk demand efficiently and consistently.'],
                        ['icon' => 'fa fa-shield-alt', 'title' => 'Medical-Grade Quality', 'desc' => 'Patient-safe materials and process control on every batch.'],
                        ['icon' => 'fa fa-tags', 'title' => 'OEM & Private Label', 'desc' => 'Your brand on masks, kits and custom components.'],
                        ['icon' => 'fa fa-globe-asia', 'title' => 'Export-Ready Supply', 'desc' => 'Dependable supply for Bangladesh, Nepal, Africa & Middle East.'],
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