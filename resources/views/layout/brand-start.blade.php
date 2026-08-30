<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Call Now</h5>
                    <span><a class="text-white text-decoration-none" href="tel:{{ config('constants.phone') }}">{{ config('constants.phone') }}</a></span>
                </div>
            </div>
            <a href="{{ route('home-page') }}" class="h1 text-white mb-0">{{ config('constants.brand_name') }}<span class="text-dark">{{ config('constants.brand_sub') }}</span></a>
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Mail Now</h5>
                    <span><a class="text-white text-decoration-none" href="mailto:{{ config('constants.email') }}">{{ config('constants.email') }}</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->
