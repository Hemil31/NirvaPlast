@extends('layout.main')
@section('content')
    <!-- Carousel Start -->

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('front/img/carousel-1.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Reliable & Professional</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Excellence in Chemical Trading Worldwide
                            </h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('front/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Connecting Global Markets with Quality Chemicals
                            </h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Carousel End -->

    <!-- Facts Start -->

    @include('components.facts')

    <!-- Facts End -->

    <!-- About Start -->

    @include('components.about')

    <!-- About End -->

    <!-- Features Start -->

    @include('components.features')

    <!-- Features End -->


    <!-- Service Start -->

    @include('components.services')

    <!-- Service End -->

    <!-- Products Start -->

    @include('components.products')

    <!-- Products End -->

    <!-- Quote Start -->

    @include('components.quotes')

    <!-- Quote End -->

    <!-- Testimonial Start -->

    @include('components.testimonial')

    <!-- Testimonial End -->

    <!-- Team Start -->

    @include('components.team')

    <!-- Team End -->


    <!-- Blog Start -->

    @include('components.blog')

    <!-- Blog End -->

    <!-- Vendor Start -->

    @include('components.vendor')

    <!-- vendor End -->
@endsection
