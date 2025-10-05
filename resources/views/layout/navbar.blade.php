
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home-page') }}" class="navbar-brand p-0 d-flex align-items-center" id="logo-link">
            <h1 class="m-0 d-flex align-items-center" id="logo-text">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" width="52" height="69">
                <span style="color:#183e68; margin-left: 8px;">MAITRII E</span><span style="color:#3db0ac;">NTERPRISE</span>
            </h1>
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home-page') }}"
                    class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('product-page') }}"
                    class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">Products</a>
                <a href="{{ route('service-page') }}"
                    class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Services</a>
                <a href="{{ route('about-page') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div> --}}
                <a href="{{ route('contact-page') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i></butaton>
            <a href="https://htmlcodex.com/startup-company-website-template"
                class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> --}}

            <a href="tel:{{ config('constants.phone') }}" class="btn btn-primary py-2 px-4 ms-3">
                <i class="fas fa-phone-alt"></i>
                Call Anytime
            </a>
        </div>
    </nav>


</div>
