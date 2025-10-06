<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{ route('home-page') }}" class="navbar-brand p-0">
                        <h1 class="m-0 d-flex flex-column align-items-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80" height="100"
                                class="mb-2">
                            <span style="color:#ffffff; font-size: 20px; white-space: nowrap; line-height: 1.2;">MAITRII
                                ENTERPRISE</span>
                        </h1>
                        <p align="center"
                            style="margin: 0; font-size: 18px; color: #535252;font-family: 'Brush Script MT', cursive;">
                            Your Trusted Partner in <br> Chemical Excellence</p>

                    </a>
                    <p class="mt-3 mb-4">Maitrii Enterprise specializes in delivering high-quality chemicals globally,
                        ensuring safety, reliability, and efficient supply solutions for every industry.</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt text-primary me-3 fs-5"></i>
                            <p class="mb-0">{{ config('constants.address') }}</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-open text-primary me-3 fs-5"></i>
                            <div>
                                <p class="mb-1">{{ config('constants.email') }}</p>
                                <p class="mb-0">{{ config('constants.email2') }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone text-primary me-3 fs-5"></i>
                            <div>
                                <p class="mb-1">{{ config('constants.phone') }}</p>
                                <p class="mb-0">{{ config('constants.phone2') }}</p>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2"
                                href="https://wa.me/{{ str_replace(' ', '', config('constants.phone')) }}"><i
                                    class="fab fa-whatsapp fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="{{ config('constants.social_links.twitter') }}"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="{{ config('constants.social_links.facebook') }}"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2"
                                href="{{ config('constants.social_links.linkedin') }}"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square"
                                href="{{ config('constants.social_links.instagram') }}"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('product-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Products</a>
                            <a class="text-light mb-2" href="{{ route('about-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{ route('service-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="{{ route('contact-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            <a class="text-light" href="{{ route('terms-condition-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Our Expertise</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Worldwide Chemical Sourcing</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Certified Quality Chemicals</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Tailored Chemical Solutions</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Fast & Secure Delivery</a>
                            <a class="text-light mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Industrial Chemical Solutions</a>
                            <a class="text-light" href="{{ route('contact-page') }}"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Request a Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">MAITRII
                            ENTERPRISE</a>. All
                        Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
