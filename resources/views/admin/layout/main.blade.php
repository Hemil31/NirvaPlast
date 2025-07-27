<!DOCTYPE html>
<html lang="en">

@include('admin.layout.head')

<body>
    <div class="wrapper sidebar_minimize">

        <!-- Sidebar -->
        @include('admin.layout.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="admin/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
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
                <!-- Navbar Header -->
                @include('admin.layout.navbar')
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                        </div>
                    </div>
                    <div class="row row-card-no-pd">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Todays Income</b></h6>
                                            <p class="text-muted">All Customs Value</p>
                                        </div>
                                        <h4 class="text-info fw-bold">$170</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">75%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Total Revenue</b></h6>
                                            <p class="text-muted">All Customs Value</p>
                                        </div>
                                        <h4 class="text-success fw-bold">$120</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">25%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>New Orders</b></h6>
                                            <p class="text-muted">Fresh Order Amount</p>
                                        </div>
                                        <h4 class="text-danger fw-bold">15</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">50%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>New Users</b></h6>
                                            <p class="text-muted">Joined New User</p>
                                        </div>
                                        <h4 class="text-secondary fw-bold">12</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-secondary w-25" role="progressbar"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">55%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include('admin.layout.footer')

        </div>
    </div>

    @include('admin.layout.js')

</body>

</html>
