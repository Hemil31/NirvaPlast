@extends('admin.layout.main')

@section('content')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Welcome to Nirva Technoplast</h6>
            </div>

        </div>
        <div class="row row-card-no-pd">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><b>Total Inquiries</b></h6>
                                <p class="text-muted">All Received Inquiries</p>
                            </div>
                            <h4 class="text-info fw-bold">{{ $totalInquiries }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><b>Total Products</b></h6>
                                <p class="text-muted">All Products</p>
                            </div>
                            <h4 class="text-success fw-bold">{{ $totalProducts }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><b>Total Categories</b></h6>
                                <p class="text-muted">All Categories</p>
                            </div>
                            <h4 class="text-danger fw-bold">{{ $totalCategories }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><b>Team Members</b></h6>
                                <p class="text-muted">Total Members</p>
                            </div>
                            <h4 class="text-secondary fw-bold">{{ $totalTeamMembers }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
