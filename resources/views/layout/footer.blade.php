<!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="{{ route('home-page') }}" class="navbar-brand d-inline-flex align-items-center gap-3 mb-3">
                        <img src="{{ asset('images/nirva-logo.png') }}" alt="{{ config('constants.company_name') }}" class="footer-logo">
                        <img src="{{ asset('images/name-logo-write.png') }}" alt="{{ config('constants.company_name') }}" class="footer-name-logo">
                    </a>
                    <p class="fs-5 mb-4">{{ config('constants.tagline') }}</p>
                    <p class="mb-4">Precision plastic engineering solutions for healthcare & industry - injection moulding, medical-grade manufacturing, nebulizer masks and OEM / private-label supply.</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>{{ config('constants.address') }}</p>
                    <p><i class="fa fa-phone-alt me-2"></i><a class="text-white-50" href="tel:{{ config('constants.phone') }}">{{ config('constants.phone') }}</a></p>
                    <p><i class="fa fa-envelope me-2"></i><a class="text-white-50" href="mailto:{{ config('constants.email') }}">{{ config('constants.email') }}</a></p>
                    <p><i class="fa fa-globe me-2"></i>{{ config('constants.website') }}</p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ config('constants.social_links.twitter') }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ config('constants.social_links.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ config('constants.social_links.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="{{ config('constants.social_links.instagram') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="{{ route('about-page') }}">About Us</a>
                            <a class="btn btn-link" href="{{ route('product-page') }}">Our Products</a>
                            <a class="btn btn-link" href="{{ route('service-page') }}">Capabilities</a>
                            <a class="btn btn-link" href="{{ route('oem-page') }}">OEM / Private Label</a>
                            <a class="btn btn-link" href="{{ route('contact-page') }}">Contact Us</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="{{ route('market-page') }}">Market Insights</a>
                            <a class="btn btn-link" href="{{ route('quality-page') }}">Quality & Compliance</a>
                            <a class="btn btn-link" href="{{ route('about-page') }}#leadership">Leadership</a>
                            <a class="btn btn-link" href="{{ route('terms-condition-page') }}">Terms & Condition</a>
                            <a class="btn btn-link" href="{{ route('contact-page') }}">Request a Quote</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Partnership Message</h4>
                            <p class="mb-3">"Precision Care. Reliable Breathing." - Let's build quality and build trust together.</p>
                            <a href="{{ route('contact-page') }}" class="btn btn-primary px-4 py-3">Discuss Your Requirement <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} <a href="{{ route('home-page') }}">{{ config('constants.company_name') }}</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">{{ config('constants.tagline') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->