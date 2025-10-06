<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <h1
                    style="color: white; opacity: 0.75; font-size: 18px; max-width: 100%; line-height: 1.2; margin: 0; padding: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    Admin
                </h1>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard-page') }}">
                        <i class="fa fa-home"></i>
                        <p>Dashboard</p>
                        {{-- <span class="badge badge-success">4</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-product-page') }}">
                        <i class="fa fa-file"></i>
                        <p>Product</p>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-inquire-page') }}">
                        <i class="fa fa-question-circle"></i>
                        <p>Inquiries</p>
                        {{-- <span class="badge badge-secondary">1</span> --}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
