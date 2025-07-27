<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{config('constants.address')}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{config('constants.phone')}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{config('constants.email')}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{config('constants.social_links.twitter')}}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{config('constants.social_links.facebook')}}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{config('constants.social_links.youtube')}}"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="{{config('constants.social_links.linkedin')}}"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Services</h4>
                <a class="btn btn-link" href="">Paving</a>
                <a class="btn btn-link" href="">Weeding</a>
                <a class="btn btn-link" href="">Turf Laying</a>
                <a class="btn btn-link" href="">Landscaping</a>
                <a class="btn btn-link" href="">Tree Lopping</a>
                <a class="btn btn-link" href="">Hedge Trimming</a>
                <a class="btn btn-link" href="">Retaining Walls</a>
                <a class="btn btn-link" href="">Mulching Strata</a>
                <a class="btn btn-link" href="">Rubbish & Land Removals</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{ route('about-page') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact-page') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('service-page') }}">Our Services</a>
                <a class="btn btn-link" href="{{ route('terms-condition-page') }}">Terms & Condition</a>
                <a class="btn btn-link" href="{{ route('contact-page') }}">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Join Our Newsletter</h4>
                <p>Stay updated with our latest gardening tips, seasonal offers, and landscaping trends..</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
