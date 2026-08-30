<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>{{ config('constants.address') }}</small>
                <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
            </div>
            <nav class="breadcrumb mb-0">
                <a class="breadcrumb-item small text-body" href="{{ route('market-page') }}">Market Insights</a>
                <a class="breadcrumb-item small text-body" href="{{ route('oem-page') }}">OEM Supply</a>
                <a class="breadcrumb-item small text-body" href="{{ route('terms-condition-page') }}">Terms</a>
                <a class="breadcrumb-item small text-body" href="{{ route('contact-page') }}">FAQs</a>
            </nav>
        </div>
    </div>
</div>
