@extends('layout.main')
@section('seo_title', 'Products | Precision Plastic Components & Custom Manufacturing | NIRVA Technoplast')
@section('seo_description', 'Precision injection-moulded plastic components, custom-machined parts and complete assemblies manufactured with consistent quality, high-volume production and OEM / private-label supply.')
@section('seo_keywords', 'precision injection moulding, custom plastic components, injection moulded parts, plastic manufacturing, mould development, CNC machining, OEM manufacturing, private label, NIRVA Technoplast')
@section('breadcrumbTitle', 'Our Products')
@section('breadcrumbActive', 'Products')
@section('content')

    <!-- Page Title Section -->
    <div class="container-fluid py-4">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-primary mb-2">Precision Plastic Components & Custom Products</h1>
            <p class="lead text-muted">Precision Injection Moulding & Plastic Engineering for OEM Supply</p>
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
                                                <p class="card-text text-muted flex-grow-1">Precision-manufactured plastic component for reliable performance.</p>
                                            @endif
                                            @if($product->file_path)
                                                <a href="{{ Storage::url($product->file_path) }}" target="_blank" class="btn btn-primary rounded-pill mt-auto">Detail</a>
                                            @else
                                                <button type="button" class="btn btn-primary rounded-pill mt-auto" onclick="alert('No file available for this product.')">Detail</button>
                                            @endif
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
                            <span><i class="fa fa-bullseye me-2"></i>Precision Injection Moulding</span>
                            <span><i class="fa fa-check-circle me-2"></i>Custom Component Production</span>
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