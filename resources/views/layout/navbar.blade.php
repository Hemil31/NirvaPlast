<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{ route('home-page') }}" class="navbar-brand py-2 me-lg-4 d-flex align-items-center gap-2">
                <img src="{{ asset('images/nirva-logo.png') }}" alt="{{ config('constants.company_name') }}" class="navbar-logo">
                <img src="{{ asset('images/name-logo-write.png') }}" alt="{{ config('constants.company_name') }}" class="navbar-name-logo">
            </a>
            <!-- Mobile hamburger -->
            <button type="button" class="mobile-menu-toggle d-lg-none" onclick="toggleMobileMenu()">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

            <!-- Desktop Navbar (lg and up) -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home-page') }}" class="nav-item nav-link {{ request()->routeIs('home-page') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about-page') }}" class="nav-item nav-link {{ request()->routeIs('about-page') ? 'active' : '' }}">About</a>
                    <a href="{{ route('market-page') }}" class="nav-item nav-link {{ request()->routeIs('market-page') ? 'active' : '' }}">Market</a>
                    <div class="nav-item dropdown d-flex align-items-center">
                        <a href="{{ route('product-page') }}" class="nav-link dropdown-toggle {{ request()->routeIs('product-page') ? 'active' : '' }}" data-bs-toggle="dropdown">Products</a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                            <li>
                                <a href="{{ route('product-page') }}" class="dropdown-item py-2">All Products</a>
                            </li>
                            @foreach (\App\Models\Category::where('status', '1')->get() as $cat)
                                <li>
                                    <a href="{{ route('product-page', ['category' => $cat->id]) }}" class="dropdown-item py-2">{{ $cat->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
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

<!-- Mobile Slide-In Drawer -->
<div class="mobile-drawer-overlay" onclick="toggleMobileMenu()"></div>
<div class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-header">
        <a href="{{ route('home-page') }}">
            <img src="{{ asset('images/nirva-logo.png') }}" alt="{{ config('constants.company_name') }}" style="height: 40px;">
            <img src="{{ asset('images/name-logo-write.png') }}" alt="{{ config('constants.company_name') }}" style="height: 36px;">
        </a>
        <button type="button" class="mobile-drawer-close" onclick="toggleMobileMenu()">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="mobile-drawer-body">
        <a href="{{ route('home-page') }}" class="mobile-drawer-link {{ request()->routeIs('home-page') ? 'active' : '' }}">
            <i class="fa fa-home"></i> Home
        </a>
        <a href="{{ route('about-page') }}" class="mobile-drawer-link {{ request()->routeIs('about-page') ? 'active' : '' }}">
            <i class="fa fa-info-circle"></i> About
        </a>
        <a href="{{ route('market-page') }}" class="mobile-drawer-link {{ request()->routeIs('market-page') ? 'active' : '' }}">
            <i class="fa fa-chart-line"></i> Market
        </a>
        <div class="mobile-drawer-link has-sub {{ request()->routeIs('product-page') ? 'active' : '' }}" onclick="toggleMobileSubmenu(this)">
            <span><i class="fa fa-box"></i> Products <i class="fa fa-chevron-down drawer-chevron"></i></span>
        </div>
        <div class="mobile-drawer-submenu {{ request()->routeIs('product-page') ? 'open' : '' }}">
            <a href="{{ route('product-page') }}" class="mobile-drawer-sublink">All Products</a>
            @foreach (\App\Models\Category::where('status', '1')->get() as $cat)
                <a href="{{ route('product-page', ['category' => $cat->id]) }}" class="mobile-drawer-sublink">{{ $cat->name }}</a>
            @endforeach
        </div>
        <a href="{{ route('service-page') }}" class="mobile-drawer-link {{ request()->routeIs('service-page') ? 'active' : '' }}">
            <i class="fa fa-cogs"></i> Capabilities
        </a>
        <a href="{{ route('oem-page') }}" class="mobile-drawer-link {{ request()->routeIs('oem-page') ? 'active' : '' }}">
            <i class="fa fa-handshake"></i> OEM
        </a>
        <a href="{{ route('quality-page') }}" class="mobile-drawer-link {{ request()->routeIs('quality-page') ? 'active' : '' }}">
            <i class="fa fa-award"></i> Quality
        </a>
        <a href="{{ route('contact-page') }}" class="mobile-drawer-link {{ request()->routeIs('contact-page') ? 'active' : '' }}">
            <i class="fa fa-envelope"></i> Contact
        </a>
    </div>
    <div class="mobile-drawer-footer">
        <div class="mobile-drawer-social">
            <a href="{{ config('constants.social_links.facebook') }}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('constants.social_links.twitter') }}"><i class="fab fa-twitter"></i></a>
            <a href="{{ config('constants.social_links.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
            <a href="{{ config('constants.social_links.youtube') }}"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<script>
    function toggleMobileMenu() {
        var drawer = document.getElementById('mobileDrawer');
        var overlay = document.querySelector('.mobile-drawer-overlay');
        var toggle = document.querySelector('.mobile-menu-toggle');
        var isOpen = drawer.classList.contains('show');

        if (isOpen) {
            drawer.classList.remove('show');
            overlay.classList.remove('show');
            toggle.classList.remove('active');
            document.body.style.overflow = '';
        } else {
            drawer.classList.add('show');
            overlay.classList.add('show');
            toggle.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function toggleMobileSubmenu(el) {
        var submenu = el.nextElementSibling;
        var chevron = el.querySelector('.drawer-chevron');
        var isOpen = submenu.classList.contains('open');

        if (isOpen) {
            submenu.classList.remove('open');
            chevron.style.transform = 'rotate(0deg)';
        } else {
            submenu.classList.add('open');
            chevron.style.transform = 'rotate(180deg)';
        }
    }
</script>
