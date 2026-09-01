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
                <!-- Sidebar (desktop filter) -->
                <div class="col-lg-3 d-none d-lg-block order-lg-1 order-2">
                    <div class="product-sidebar">
                        @include('components.category-filter')

                        <div class="sidebar-links">
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
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="products-grid">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                            <h2 class="mb-0" id="productGridTitle">
                                {{ request('category') && $categories->firstWhere('id', request('category')) ? $categories->firstWhere('id', request('category'))->name : 'All Products' }}
                            </h2>
                            <!-- Mobile Category Filter (select-style dropdown, right aligned) -->
                            <div class="mobile-filter-wrap d-lg-none ms-auto">
                                <div class="mobile-select" id="mobileFilterBtn" onclick="toggleMobileFilter()" role="button" tabindex="0" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mobile-select-label" id="mobileFilterLabel">{{ request('category') && $categories->firstWhere('id', request('category')) ? $categories->firstWhere('id', request('category'))->name : 'All Categories' }}</span>
                                    <i class="fa fa-chevron-down mobile-select-caret"></i>
                                </div>
                                <div class="mobile-select-menu" id="mobileFilterPanel" role="listbox">
                                    <label class="mobile-select-option">
                                        <input type="radio" name="categoryFilter" value="all" class="filter-radio" {{ !request('category') ? 'checked' : '' }}>
                                        <span class="mobile-option-label">All Categories</span>
                                        <i class="fa fa-check mobile-option-check"></i>
                                    </label>
                                    @foreach ($categories as $cat)
                                        <label class="mobile-select-option">
                                            <input type="radio" name="categoryFilter" value="{{ $cat->id }}" class="filter-radio" {{ request('category') == $cat->id ? 'checked' : '' }}>
                                            <span class="mobile-option-label">{{ $cat->name }}</span>
                                            <i class="fa fa-check mobile-option-check"></i>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row g-4" id="productGrid">
                            @forelse($products as $product)
                                <div class="col-md-4 product-col" data-category="{{ $product->category_id ?? '0' }}">
                                    <div class="card product-card h-100 shadow-sm">
                                        @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="{{ $product->product_name }}" style="height: 200px; object-fit: cover;">
                                        @else
                                            <div class="card-img-top d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                                                <i class="fa fa-droplet fa-3x"></i>
                                            </div>
                                        @endif
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $product->product_name }}</h5>
                                            @if($product->content)
                                                <p class="card-text text-muted flex-grow-1">{{ Str::limit(strip_tags($product->content), 120) }}</p>
                                            @else
                                                <p class="card-text text-muted flex-grow-1">Precision-manufactured product for reliable performance.</p>
                                            @endif
                                            <button type="button" class="btn btn-primary rounded-pill">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-muted mb-0" id="noProductsMsg">Our product catalogue is being updated. Please contact us for current product details.</p>
                            @endforelse
                        </div>
                        <p class="text-center text-muted mt-4 mb-0 d-none" id="filterEmptyMsg">No products found in this category.</p>
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

        .sidebar-section.active {
            background: var(--bs-primary);
            transform: translateX(5px);
        }

        .sidebar-section.active .sidebar-title,
        .sidebar-section.active .sidebar-title a,
        .sidebar-section.active .sidebar-arrow {
            color: white;
        }

        .product-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(51, 104, 198, 0.15);
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

        /* Category Filter */
        .sidebar-title-block {
            margin-bottom: 15px;
        }

        .sidebar-heading {
            font-size: 16px;
            font-weight: 700;
            color: #212529;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .filter-options {
            margin-bottom: 20px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px 14px;
            margin-bottom: 8px;
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        .filter-option:hover {
            border-color: var(--bs-primary);
            background: #f1f6fe;
        }

        .filter-option.active {
            border-color: var(--bs-primary);
            background: var(--bs-primary);
            color: white;
        }

        .filter-radio {
            appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #adb5bd;
            border-radius: 50%;
            margin: 0;
            flex-shrink: 0;
            position: relative;
            transition: all 0.2s ease;
        }

        .filter-radio:checked {
            border-color: white;
            background: var(--bs-primary);
        }

        .filter-radio:checked::after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

        .filter-label {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin-left: 10px;
        }

        .filter-name {
            font-size: 14px;
            font-weight: 500;
        }

        .filter-count {
            font-size: 12px;
            font-weight: 600;
            background: #e9ecef;
            border-radius: 20px;
            padding: 2px 10px;
            color: #495057;
            transition: all 0.2s ease;
        }

        .filter-option.active .filter-count {
            background: rgba(255, 255, 255, 0.25);
            color: white;
        }

        .sidebar-links .sidebar-section:first-child {
            margin-top: 15px;
        }

        /* Mobile: category filter as select-style right-aligned dropdown */
        .mobile-filter-wrap {
            position: relative;
            min-width: 0;
        }

        .mobile-select {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            min-width: 180px;
            background: #fff;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 500;
            color: #212529;
            cursor: pointer;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            user-select: none;
        }

        .mobile-select:hover {
            border-color: var(--bs-primary);
        }

        .mobile-select.open {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 3px rgba(51, 104, 198, 0.15);
        }

        .mobile-select-label {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .mobile-select-caret {
            font-size: 12px;
            color: #6c757d;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .mobile-select.open .mobile-select-caret {
            transform: rotate(180deg);
        }

        .mobile-select-menu {
            position: absolute;
            top: calc(100% + 6px);
            right: 0;
            left: 0;
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
            z-index: 1060;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-6px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
            overflow: hidden;
            padding: 6px 0;
            max-height: 260px;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .mobile-select-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .mobile-option-label {
            font-size: 14px;
            font-weight: 500;
            color: #212529;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .mobile-option-check {
            font-size: 14px;
            color: var(--bs-primary);
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.2s ease;
        }

        .mobile-select-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 11px 14px;
            margin: 0;
            cursor: pointer;
            border-bottom: 1px solid #f5f5f5;
        }

        .mobile-select-option:last-child {
            border-bottom: none;
        }

        .mobile-select-option:hover {
            background: #f1f6fe;
        }

        .mobile-select-option.active {
            background: var(--bs-primary);
        }

        .mobile-select-option.active .mobile-option-label {
            color: #fff;
        }

        .mobile-select-option.active .mobile-option-check {
            opacity: 1;
            transform: scale(1);
            color: #fff;
        }

        .mobile-filter-wrap .filter-radio {
            display: none;
        }

        @media (max-width: 576px) {
            .mobile-select {
                min-width: 150px;
            }
        }
    </style>

    <script>
        function toggleMobileFilter() {
            var panel = document.getElementById('mobileFilterPanel');
            var btn = document.getElementById('mobileFilterBtn');
            var isOpen = panel.classList.contains('show');

            if (isOpen) {
                closeMobileFilter(panel, btn);
            } else {
                panel.classList.add('show');
                btn.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        }

        function closeMobileFilter(panel, btn) {
            panel.classList.remove('show');
            btn.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
        }

        function syncFilterButtons() {
            var checked = document.querySelector('.filter-radio:checked');
            var value = checked ? checked.value : 'all';

            document.querySelectorAll('.filter-option').forEach(function (opt) {
                var input = opt.querySelector('.filter-radio');
                opt.classList.toggle('active', input && input.checked);
            });
            document.querySelectorAll('.mobile-select-option').forEach(function (opt) {
                var input = opt.querySelector('.filter-radio');
                opt.classList.toggle('active', input && input.checked);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var radios = document.querySelectorAll('.filter-radio');
            var columns = document.querySelectorAll('#productGrid .product-col');
            var title = document.getElementById('productGridTitle');
            var filterEmpty = document.getElementById('filterEmptyMsg');
            var mobileLabel = document.getElementById('mobileFilterLabel');
            var mobilePanel = document.getElementById('mobileFilterPanel');
            var mobileBtn = document.getElementById('mobileFilterBtn');

            var categoryNames = {};
            radios.forEach(function(r) {
                if (r.value === 'all') {
                    categoryNames[r.value] = 'All Categories';
                } else {
                    var label = (r.closest('.filter-option') || r.closest('.mobile-select-option'))
                        .querySelector('.filter-name, .mobile-option-label');
                    categoryNames[r.value] = label ? label.textContent.trim() : '';
                }
            });

            function applyFilter() {
                var selected = document.querySelector('.filter-radio:checked');
                var value = selected ? selected.value : 'all';
                var visible = 0;

                columns.forEach(function(col) {
                    var show = (value === 'all') || (col.dataset.category === value);
                    col.style.display = show ? '' : 'none';
                    if (show) visible++;
                });

                title.textContent = categoryNames[value] || 'All Products';
                if (mobileLabel) {
                    mobileLabel.textContent = categoryNames[value] || 'All Categories';
                }

                if (value !== 'all' && visible === 0) {
                    filterEmpty.classList.remove('d-none');
                } else {
                    filterEmpty.classList.add('d-none');
                }

                syncFilterButtons();

                // close mobile dropdown after single selection
                if (mobilePanel && mobilePanel.classList.contains('show')) {
                    closeMobileFilter(mobilePanel, mobileBtn);
                }
            }

            radios.forEach(function(r) {
                r.addEventListener('change', applyFilter);
                r.addEventListener('click', function() {
                    if (!r.checked) {
                        r.checked = true;
                        applyFilter();
                    }
                });
            });

            document.addEventListener('click', function(e) {
                if (mobilePanel && mobilePanel.classList.contains('show')
                    && !e.target.closest('.mobile-filter-wrap')) {
                    closeMobileFilter(mobilePanel, mobileBtn);
                }
            });

            applyFilter();
        });
    </script>

@endsection