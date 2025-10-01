<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Leading Chemical Trading Company with Years of Experience</h1>
                </div>
                <p class="mb-4">Maitrii Enterprise is a leading chemical trading company, providing high-quality
                    chemicals for industrial, pharmaceutical, and commercial purposes. We ensure reliable sourcing,
                    timely delivery, and complete customer satisfaction. Our expertise and global network allow us to
                    serve clients efficiently and responsibly.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-trophy text-primary me-3"></i>Trusted & Award-Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-users text-primary me-3"></i>Professional Team</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-headset text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-industry text-primary me-3"></i>Competitive Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call us for any inquiries</h5>
                        <h4 class="text-primary mb-0">
                            <a href="tel:{{ config('constants.phone') }}">
                                {{ config('constants.phone') }}
                            </a>
                        </h4>
                    </div>
                </div>
                <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A
                    Quote</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="{{ asset('front/img/about.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
