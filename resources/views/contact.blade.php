@extends('layout.main')
@section('seo_title', 'Contact Us | Request a Quote | NIRVA Technoplast')
@section('seo_description', 'Contact NIRVA Technoplast Private Limited for bulk nebulizer mask supply, OEM / private-label manufacturing and precision plastic engineering. Call +91 99132 92004 or email info@nirvatechnoplast.in.')
@section('seo_keywords', 'contact NIRVA Technoplast, nebulizer mask supplier India, OEM manufacturer Surat, request a quote, medical plastic manufacturer')
@section('breadcrumbTitle', 'Contact Us')
@section('breadcrumbActive', 'Contact')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">Let's Build Quality. Build Trust.</h1>
                <p class="text-muted mt-3 mb-0">Precision Engineering. Reliable Solutions. Discuss your requirement
                    with our team today.</p>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 70px; height: 70px; flex-shrink: 0;">
                            <i class="fa fa-phone-alt text-white" style="font-size: 24px;"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-1">Call to ask any question</h5>
                            <h4 class="text-primary mb-0" style="font-size: 18px;">{{ config('constants.phone') }}</h4>
                            @if(config('constants.phone') !== config('constants.phone2'))
                                <h4 class="text-primary mb-0" style="font-size: 18px;">{{ config('constants.phone2') }}</h4>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 70px; height: 70px; flex-shrink: 0;">
                            <i class="fa fa-envelope-open text-white" style="font-size: 24px;"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-1">Email to get free quote</h5>
                            <h4 class="text-primary mb-0" style="font-size: 18px;">{{ config('constants.email') }}</h4>
                            @if(config('constants.email') !== config('constants.email2'))
                                <h4 class="text-primary mb-0" style="font-size: 18px;">{{ config('constants.email2') }}</h4>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 70px; height: 70px; flex-shrink: 0;">
                            <i class="fa fa-map-marker-alt text-white" style="font-size: 24px;"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="mb-1">Visit our office</h5>
                            <h4 class="text-primary mb-0" style="font-size: 18px;">
                                {{ config('constants.address') }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div id="contactAlert"></div>
                    <form id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Name" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                    placeholder="Your Email" style="height: 55px;" required>
                            </div>
                            <div class="col-3">
                                <select class="form-control border-0 bg-light px-4" name="country_code"
                                    style="height: 55px;" required>
                                    <option value="+91" selected>🇮🇳 +91</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <!-- Add more as needed -->
                                </select>
                            </div>
                            <div class="col-9">
                                <input type="tel" class="form-control border-0 bg-light px-4" name="mobile"
                                    placeholder="Mobile No." maxlength="15" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5814.833705499568!2d72.95940809999999!3d21.2558301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be045004fb7bee5%3A0x61324b1930c8d43f!2sSHREEJI%20INDUSTRIAL%203!5e1!3m2!1sen!2sin!4v1788153667834!5m2!1sen!2sin
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
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
                        $('#contactAlert').html(
                            '<div class="alert alert-success mt-3">Your inquiry has been submitted successfully!</div>'
                        );
                        $('#contactForm')[0].reset();

                        // Hide message after 3 seconds
                        setTimeout(function() {
                            $('#contactAlert').fadeOut();
                        }, 3000);
                    },
                    error: function(xhr) {
                        $('#contactAlert').html(
                            '<div class="alert alert-danger mt-3">There was an error submitting your inquiry. Please try again later.</div>'
                        );
                    }
                });
            });
        });
    </script>
@endpush
