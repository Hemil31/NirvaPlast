@extends('layout.main')
@section('title', 'Products')
@section('breadcrumbTitle', 'Our Products')
@section('breadcrumbActive', 'Products')
@section('content')

    <!-- Page Title Section -->
    <div class="container-fluid py-4">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-primary mb-2">Our Chemical Products</h1>
            <p class="lead text-muted">Premium Quality Chemicals for Industrial Solutions</p>
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
                            <h4 class="sidebar-title"><a>Services</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>
                        <div class="sidebar-section" onclick="location.href='{{ route('about-page') }}'">
                            <h4 class="sidebar-title"><a>About</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>
                        <div class="sidebar-section" onclick="location.href='{{ route('contact-page') }}'">
                            <h4 class="sidebar-title"><a>CONTACT US</a></h4>
                            <div class="sidebar-arrow">></div>
                        </div>

                        <!-- Product Image -->
                        <div class="product-image-container mt-4">
                            <img src="{{ asset('images/01.png   ') }}" alt="Chemical Products" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="products-grid">
                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <div class="product-column">
                                    <ul class="product-list">
                                        <li class="product-item">ACETIC ACID</li>
                                        <li class="product-item">ACETONE</li>
                                        <li class="product-item">ALUMINIUM SULPHATE</li>
                                        <li class="product-item">BORAX DECAHYDRATE</li>
                                        <li class="product-item">BORIC ACID</li>
                                        <li class="product-item">CALCIUM HYPOCHLORIDE</li>
                                        <li class="product-item">CAUSTIC POTASH</li>
                                        <li class="product-item">CAUSTIC SODA FLAKES</li>
                                        <li class="product-item">CAUSTIC SODA LYE</li>
                                        <li class="product-item">CAUSTIC SODA PRILLS</li>
                                        <li class="product-item">DOLAMITE POWDER</li>
                                        <li class="product-item">FORMALDEHYDE</li>
                                        <li class="product-item">FORMIC ACID</li>
                                        <li class="product-item">HYDRATED LIME POWDER</li>
                                        <li class="product-item">HYDROCHLORIC ACID</li>
                                        <li class="product-item">HYDROFLUORIC ACID</li>
                                        <li class="product-item">HYDROGEN PEROXIDE</li>
                                        <li class="product-item">ISOPROPYL ALCOHOLIPA</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-md-6">
                                <div class="product-column">
                                    <ul class="product-list">
                                        <li class="product-item">ACID SLURRY (LABSA)</li>
                                        <li class="product-item">IODOPHOR</li>
                                        <li class="product-item">NITRIC ACID - STRONG - 72%</li>
                                        <li class="product-item">NITRIC ACID – WEAK - 60%</li>
                                        <li class="product-item">ORTHOPHOSPHORIC ACID - FOOD</li>
                                        <li class="product-item">ORTHOPHOSPHORIC ACID - TECH</li>
                                        <li class="product-item">POLY ALUMINIUM CHLORIDE</li>
                                        <li class="product-item">POTASSIUM PERMANGANATE</li>
                                        <li class="product-item">PROPYLENE GLYCOL</li>
                                        <li class="product-item">SODA ASH</li>
                                        <li class="product-item">SODIUM BICARBONATE REFINED</li>
                                        <li class="product-item">SODIUM HYPOCHLORITE</li>
                                        <li class="product-item">SODIUM METABISULPHITE</li>
                                        <li class="product-item">SODIUM NITRATE</li>
                                        <li class="product-item">SODIUM SULPHATE - FOOD</li>
                                        <li class="product-item">SULPHURIC ACID - BATTERY</li>
                                        <li class="product-item">SULPHURIC ACID - TECHNICAL</li>
                                        <li class="product-item">TRISODIUM PHOSPHATE</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marquee Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="marquee-container">
                        <div class="marquee-content">
                            <span>🏭 Premium Quality Chemicals</span>
                            <span>✓ ISO Certified Products</span>
                            <span>🚚 Fast & Reliable Delivery</span>
                            <span>🌟 Trusted by 500+ Industries</span>
                            <span>💎 Best Prices Guaranteed</span>
                            <span>🔬 Laboratory Tested</span>
                            <span>📞 24/7 Customer Support</span>
                            <span>🌍 Pan India Supply</span>
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
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border-radius: 15px;
            padding: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(6, 163, 218, 0.3);
            position: relative;
        }

        .marquee-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #feca57);
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

        /* Hover effect to pause marquee */
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }

        /* Responsive marquee */
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
            background: var(--primary);
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
        }

        .product-item:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--primary);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .product-item:hover {
            background: linear-gradient(135deg, var(--primary) 0%, #0288c7 100%);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 8px rgba(6, 163, 218, 0.3);
        }

        .product-item:hover:before {
            transform: translateX(0);
        }

        .product-item:nth-child(even) {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .product-item:nth-child(even):hover {
            background: linear-gradient(135deg, var(--secondary) 0%, #2e9b4a 100%);
        }

        /* Responsive Design */
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

        /* Animation for page load */
        .product-item {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .product-item:nth-child(1) {
            animation-delay: 0.1s;
        }

        .product-item:nth-child(2) {
            animation-delay: 0.15s;
        }

        .product-item:nth-child(3) {
            animation-delay: 0.2s;
        }

        .product-item:nth-child(4) {
            animation-delay: 0.25s;
        }

        .product-item:nth-child(5) {
            animation-delay: 0.3s;
        }

        .product-item:nth-child(6) {
            animation-delay: 0.35s;
        }

        .product-item:nth-child(7) {
            animation-delay: 0.4s;
        }

        .product-item:nth-child(8) {
            animation-delay: 0.45s;
        }

        .product-item:nth-child(9) {
            animation-delay: 0.5s;
        }

        .product-item:nth-child(10) {
            animation-delay: 0.55s;
        }

        .product-item:nth-child(11) {
            animation-delay: 0.6s;
        }

        .product-item:nth-child(12) {
            animation-delay: 0.65s;
        }

        .product-item:nth-child(13) {
            animation-delay: 0.7s;
        }

        .product-item:nth-child(14) {
            animation-delay: 0.75s;
        }

        .product-item:nth-child(15) {
            animation-delay: 0.8s;
        }

        .product-item:nth-child(16) {
            animation-delay: 0.85s;
        }

        .product-item:nth-child(17) {
            animation-delay: 0.9s;
        }

        .product-item:nth-child(18) {
            animation-delay: 0.95s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

@endsection
