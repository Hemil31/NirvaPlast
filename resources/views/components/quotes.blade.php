<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                    <h1 class="mb-0">Need a Free Quote? Contact Us Anytime</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Response Within 24 Hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Always available to assist
                            you.
                        </h5>
                    </div>
                </div>
                <p class="mb-4">At Maitrii Enterprise, we provide customized chemical trading solutions tailored to
                    your needs. Whether you require bulk supplies, specialty chemicals, or global sourcing, our team is
                    ready to deliver competitive pricing, timely delivery, and expert support.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Let’s Discuss Your Requirements</h5>
                        <h4 class="text-primary mb-0">
                            <a href="tel:{{ config('constants.phone') }}" class="text-decoration-none text-primary">
                                {{ config('constants.phone') }}
                            </a>
                        </h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-4">
                                <select class="form-select bg-light border-0" name="country_code" style="height: 55px;">
                                    <option value="+91" selected>🇮🇳 +91</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+971">🇦🇪 +971</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <input type="tel" class="form-control bg-light border-0" name="mobile" placeholder="Mobile No." style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                            </div>
                            {{-- <div class="col-3">
                                <select class="form-control border-0 bg-light px-4" style="height: 55px;">
                                    <option value="+91" selected>🇮🇳 +91</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <!-- Add more as needed -->
                                </select>
                            </div>
                            <div class="col-9">
                                <input type="tel" class="form-control border-0 bg-light px-4" placeholder="Mobile No."
                                    maxlength="10" style="height: 55px;">
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.inquire.store') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#formAlert').html(
                            '<div class="alert alert-success mt-3">Your inquiry has been submitted successfully!</div>'
                        );
                        $('#contactForm')[0].reset();

                        // Hide message after 3 seconds
                        setTimeout(function() {
                            $('#formAlert').fadeOut();
                        }, 3000);
                    },
                    error: function(xhr) {
                        $('#formAlert').html(
                            '<div class="alert alert-danger mt-3">There was an error submitting your inquiry. Please try again later.</div>'
                        );
                    }
                });
            });
        });
    </script>
@endpush
