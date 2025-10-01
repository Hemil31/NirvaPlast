<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Trusted Chemical Trading & Supply Solutions</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-globe-americas text-white"></i>
                    </div>
                    <h4 class="mb-3">Global Sourcing</h4>
                    <p class="m-0">We connect you with top international chemical suppliers ensuring reliability and
                        consistency</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('product-page') }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-vial text-white"></i>
                    </div>
                    <h4 class="mb-3">Quality Assurance</h4>
                    <p class="m-0">All our products meet strict safety and quality standards for maximum trust and
                        compliance</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('product-page') }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-truck text-white"></i>
                    </div>
                    <h4 class="mb-3">Efficient Logistics</h4>
                    <p class="m-0">We ensure timely and secure delivery, so your operations run without interruption.
                    </p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('product-page') }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-flask text-white"></i>
                    </div>
                    <h4 class="mb-3">Industrial Solutions</h4>
                    <p class="m-0">Supplying essential raw materials tailored for pharmaceuticals, textiles, and
                        other industries.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('product-page') }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-handshake text-white"></i>
                    </div>
                    <h4 class="mb-3">Custom Formulations</h4>
                    <p class="m-0">We provide specialized chemical blends and solutions customized for your business
                        needs.</p>
                    <a class="btn btn-lg btn-primary rounded" href="{{ route('product-page') }}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s" onclick="location.href='{{ route('contact-page') }}'">
                <div
                    class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Request a Quote</h3>
                    <p class="text-white mb-3">Get the best pricing and solutions for your chemical requirements with
                        expert guidance.</p>
                    <h2 class="text-white mb-0">
                        {{ config('constants.phone') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
