<div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="{{ route('home-page') }}" class="navbar-brand py-2 me-lg-4 d-flex align-items-center gap-2">
                    <img src="{{ asset('images/nirva-logo.png') }}" alt="{{ config('constants.company_name') }}" class="navbar-logo">
                    <img src="{{ asset('images/name-logo-write.png') }}" alt="{{ config('constants.company_name') }}" class="navbar-name-logo">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('home-page') }}" class="nav-item nav-link {{ request()->routeIs('home-page') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about-page') }}" class="nav-item nav-link {{ request()->routeIs('about-page') ? 'active' : '' }}">About</a>
                        <a href="{{ route('market-page') }}" class="nav-item nav-link {{ request()->routeIs('market-page') ? 'active' : '' }}">Market</a>
                        <a href="{{ route('product-page') }}" class="nav-item nav-link {{ request()->routeIs('product-page') ? 'active' : '' }}">Products</a>
                        <a href="{{ route('service-page') }}" class="nav-item nav-link {{ request()->routeIs('service-page') ? 'active' : '' }}">Capabilities</a>
                        <a href="{{ route('oem-page') }}" class="nav-item nav-link {{ request()->routeIs('oem-page') ? 'active' : '' }}">OEM</a>
                        <a href="{{ route('quality-page') }}" class="nav-item nav-link {{ request()->routeIs('quality-page') ? 'active' : '' }}">Quality</a>
                        <a href="{{ route('contact-page') }}" class="nav-item nav-link {{ request()->routeIs('contact-page') ? 'active' : '' }}">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{ config('constants.social_links.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{ config('constants.social_links.twitter') }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{ config('constants.social_links.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{ config('constants.social_links.youtube') }}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>