<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <div class="container-fluid">
        <!-- Brand Name -->
        <a href="{{ route('home-page') }}" class="navbar-brand d-flex align-items-center px-2 px-lg-4">
            <h1 class="m-0 fs-5 text-break text-center">
                Patel Landscaping<br>And Garden Care
            </h1>
        </a>

        <!-- Toggler for Mobile View -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 text-center text-lg-start">
                <a href="{{ route('home-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('home-page') ? 'active' : '' }}">Home</a>

                <a href="{{ route('about-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('about-page') ? 'active' : '' }}">About</a>

                <a href="{{ route('service-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('service-page') ? 'active' : '' }}">Services</a>

                <a href="{{ route('project-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('project-page') ? 'active' : '' }}">Projects</a>

                <a href="{{ route('blog-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('blog-page') ? 'active' : '' }}">Blog</a>

                <!-- Optional Dropdown (Uncomment to use) -->
                {{--
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                --}}

                <a href="{{ route('contact-page') }}"
                    class="nav-item nav-link {{ request()->routeIs('contact-page') ? 'active' : '' }}">Contact</a>
            </div>

            <!-- Desktop Only CTA Button -->
            <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i
                    class="fa fa-arrow-right ms-3"></i></a>

            </a>
        </div>
    </div>
</nav>
