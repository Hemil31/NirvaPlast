@extends('layout.main')
@section('seo_title', 'Products | Nebulizer Masks & Medical-Grade Manufacturing | NIRVA Technoplast')
@section('seo_description', 'Adult and pediatric nebulizer masks, complete nebulization kits and custom plastic components manufactured with medical-grade materials, high-volume production and OEM / private-label supply.')
@section('seo_keywords', 'nebulizer masks, adult nebulizer mask, pediatric nebulizer mask, nebulization kit, medical plastic components, OEM manufacturing, private label, NIRVA Technoplast')
@section('breadcrumbTitle', 'Our Products')
@section('breadcrumbActive', 'Products')
@section('content')

    <!-- Page Title Section -->
    <div class="container-fluid py-4">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-primary mb-2">Nebulizer Masks & Medical-Grade Products</h1>
            <p class="lead text-muted">Precision Injection Moulding for Respiratory Care & Healthcare OEM Supply</p>
        </div>
    </div>

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Sidebar -->
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="product-sidebar">
                        <div class="sidebar-section" onclick="location.href='{{ route('service-page') }}'">
                            <h4 class="sidebar-title"><a>Capabilities</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>
                        <div class="sidebar-section" onclick="location.href='{{ route('oem-page') }}'">
                            <h4 class="sidebar-title"><a>OEM / Private Label</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>
                        <div class="sidebar-section" onclick="location.href='{{ route('about-page') }}'">
                            <h4 class="sidebar-title"><a>About NIRVA</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>
                        <div class="sidebar-section" onclick="location.href='{{ route('contact-page') }}'">
                            <h4 class="sidebar-title"><a>CONTACT US</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>

                        <!-- Product Image -->
                        <div class="product-image-container mt-4">
                            <img src="{{ asset('front/img/carousel-2.jpg') }}" alt="Nebulizer Mask Manufacturing" class="img-fluid">
                            <h6 class="mt-3 text-primary mb-0">Medical-Grade Nebulizer Masks</h6>
                        </div>
                        <div class="product-image-container mt-3">
                            <h6 class="text-primary mb-2">Adult & Pediatric Variants</h6>
                            <p class="text-muted small mb-0">High-volume masks, kits and custom medical components for
                                OEM and private-label supply.</p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="products-grid">
                        @if($products->count() > 0)
                            <div class="row">
                                @php
                                    $half = ceil($products->count() / 2);
                                    $chunks = $products->chunk($half);
                                @endphp

                                @foreach ($chunks as $chunk)
                                    <div class="col-md-6">
                                        <div class="product-column">
                                            <ul class="product-list">
                                                @foreach ($chunk as $product)
                                                    <li class="product-item"
                                                        onclick="window.open('{{ $product->file_path ? Storage::url($product->file_path) : route('contact-page') }}', '{{ $product->file_path ? '_blank' : '_self' }}')">
                                                        {{ $product->product_name }}
                                                        @if($product->content)
                                                            <small class="d-block mt-1 text-muted">{{ Str::limit(strip_tags($product->content), 120) }}</small>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center text-muted mb-0">Our product catalogue is being updated. Please contact us for current product details.</p>
                        @endif
                    </div>

                    <!-- Product Attributes -->
                    <div class="products-grid mt-4">
                        <h4 class="mb-4">Nebulizer Mask Attributes</h4>
                        <div class="row g-3">
                            @php
                                $attributes = [
                                    'Medical-Grade Materials',
                                    'Comfortable & Skin-Friendly',
                                    'Adult & Pediatric Variants',
                                    'High Volume Production',
                                    'Consistent Quality & Reliability',
                                    'Sterile / Non-Sterile Options',
                                ];
                            @endphp
                            @foreach ($attributes as $attribute)
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-check-circle text-primary me-3"></i>
                                        <span class="fw-medium">{{ $attribute }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Complete Kit Components -->
                    <div class="products-grid mt-4">
                        <h4 class="mb-2">Complete Nebulization Kit Opportunity</h4>
                        <p class="text-muted mb-4">Complete kits offer higher value per set than the mask alone.
                            Typical kit components:</p>
                        <div class="row g-3">
                            @php
                                $kit = ['Mask', 'Medicine Cup', 'Air Tube', 'Mouthpiece', 'Filter / Accessories'];
                            @endphp
                            @foreach ($kit as $component)
                                <div class="col-md-4">
                                    <div class="bg-light rounded p-3 text-center h-100">
                                        <i class="fa fa-droplet text-primary fa-2x mb-2"></i>
                                        <h6 class="mb-0">{{ $component }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- OEM Buyer Requirements -->
                    <div class="products-grid mt-4">
                        <h4 class="mb-4">OEM & Buyer Requirements We Support</h4>
                        <div class="row g-3">
                            @php
                                $requirements = [
                                    'Bulk Orders',
                                    'Sampling',
                                    'Product Approval',
                                    'Private Labeling',
                                    'Recurring OEM Production',
                                    'Exports (Bangladesh, Nepal, Africa & Middle East)',
                                ];
                            @endphp
                            @foreach ($requirements as $requirement)
                                <div class="col-md-4">
                                    <div class="bg-light rounded p-3 text-center h-100">
                                        <i class="fa fa-handshake text-primary fa-2x mb-2"></i>
                                        <h6 class="mb-0">{{ $requirement }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('contact-page') }}" class="btn btn-primary px-5 py-3 rounded-pill">Request Product Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marquee Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="marquee-container">
                        <div class="marquee-content">
                            <span><i class="fa fa-bullseye me-2"></i>Medical-Grade Nebulizer Masks</span>
                            <span><i class="fa fa-check-circle me-2"></i>Adult & Pediatric Variants</span>
                            <span><i class="fa fa-industry me-2"></i>High-Volume Injection Moulding</span>
                            <span><i class="fa fa-cogs me-2"></i>Mould Development & CNC Machining</span>
                            <span><i class="fa fa-handshake me-2"></i>OEM & Private-Label Supply</span>
                            <span><i class="fa fa-gem me-2"></i>Consistent Quality</span>
                            <span><i class="fa fa-truck me-2"></i>On-Time Delivery</span>
                            <span><i class="fa fa-globe-asia me-2"></i>Export Markets: Bangladesh, Nepal, Africa & Middle East</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <style>
        /* Marquee Styles */
        .marquee-container {
            background: linear-gradient(45deg, var(--bs-primary), var(--bs-secondary));
            border-radius: 15px;
            padding: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(51, 104, 198, 0.3);
            position: relative;
        }

        .marquee-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--bs-primary), var(--bs-secondary));
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            z-index: 1;
        }

        .marquee-content {
            position: relative;
            z-index: 2;
            display: flex;
            white-space: nowrap;
            animation: scroll 30s linear infinite;
        }

        .marquee-content span {
            display: inline-block;
            padding: 0 3rem;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            min-width: max-content;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }

        @media (max-width: 768px) {
            .marquee-content span {
                font-size: 0.9rem;
                padding: 0 2rem;
            }
        }

        @media (max-width: 576px) {
            .marquee-content span {
                font-size: 0.8rem;
                padding: 0 1.5rem;
            }
        }

        .product-sidebar {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar-section {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar-section:hover {
            background: var(--bs-primary);
            color: white;
            transform: translateX(5px);
        }

        .sidebar-title {
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            color: #495057;
            letter-spacing: 0.5px;
        }

        .sidebar-section:hover .sidebar-title {
            color: white;
        }

        .sidebar-section:hover .sidebar-title a {
            color: white;
        }

        .sidebar-arrow {
            font-weight: bold;
            font-size: 16px;
            color: #6c757d;
        }

        .sidebar-section:hover .sidebar-arrow {
            color: white;
        }

        .product-image-container {
            text-align: center;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .products-grid {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-column {
            height: 100%;
        }

        .product-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .product-item {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 12px 15px;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 500;
            color: #495057;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .product-item:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--bs-primary);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .product-item:hover {
            background: linear-gradient(135deg, var(--bs-primary) 0%, #29539e 100%);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 8px rgba(51, 104, 198, 0.3);
        }

        .product-item:hover .text-muted {
            color: #fff !important;
        }

        .product-item:hover:before {
            transform: translateX(0);
        }

        .product-item:nth-child(even) {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .product-item:nth-child(even):hover {
            background: linear-gradient(135deg, var(--bs-secondary) 0%, #6b7392 100%);
        }

        @media (max-width: 768px) {
            .product-sidebar {
                margin-bottom: 30px;
            }

            .sidebar-section {
                padding: 12px 15px;
            }

            .sidebar-title {
                font-size: 13px;
            }

            .products-grid {
                padding: 20px;
            }

            .product-item {
                font-size: 12px;
                padding: 10px 12px;
            }
        }

        @media (max-width: 576px) {
            .product-item {
                margin-bottom: 6px;
                font-size: 11px;
            }

            .products-grid {
                padding: 15px;
            }
        }
    </style>

@endsection