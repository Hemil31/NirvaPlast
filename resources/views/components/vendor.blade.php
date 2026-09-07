<div class="container-fluid container-serve py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 650px;">
            <h5 class="fw-bold text-primary text-uppercase">Who We Serve</h5>
            <h1 class="mb-0">Industries & Buyer Segments</h1>
            <p class="text-muted mb-0 mt-3">Precision medical plastics for a connected healthcare supply chain —
                from design partners to last-mile institutional buyers.</p>
        </div>

        @php
            $segments = [
                ['icon' => 'fa fa-hospital', 'title' => 'Medical Device OEMs', 'desc' => 'Nebulizer & respiratory-care brands.'],
                ['icon' => 'fa fa-user-md', 'title' => 'Hospitals & Clinics', 'desc' => 'Regular patient-use requirements.'],
                ['icon' => 'fa fa-truck-loading', 'title' => 'Distributors & Wholesalers', 'desc' => 'Bulk medical supply for wide reach.'],
                ['icon' => 'fa fa-tags', 'title' => 'Private-Label Brands', 'desc' => 'Your brand, our precision manufacturing.'],
                ['icon' => 'fa fa-globe-asia', 'title' => 'Export Buyers', 'desc' => 'International healthcare distributors.'],
                ['icon' => 'fa fa-building', 'title' => 'Institutional Buyers', 'desc' => 'Continuous, timely bulk availability.'],
            ];
        @endphp

        <div class="row g-4 justify-content-center align-items-stretch">
            @foreach ($segments as $index => $segment)
                <div class="col-lg-4 col-md-6 {{ $index >= 3 ? 'mt-lg-5' : '' }} wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.1) }}s">
                    <div class="serve-item text-center">
                        <span class="serve-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <div class="serve-hex">
                            <i class="{{ $segment['icon'] }}"></i>
                        </div>
                        <h5 class="fw-bold mb-0">{{ $segment['title'] }}</h5>
                        <div class="serve-rule"></div>
                        <p class="text-muted small mb-4">{{ $segment['desc'] }}</p>
                        <a href="{{ route('contact-page') }}" class="serve-link">
                            Partner With Us <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>