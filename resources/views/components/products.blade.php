<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">What We Manufacture</h5>
            <h2 class="mb-0">Precision Plastic Components & Custom Products</h2>
        </div>
        <div class="row g-4">
            @php
                $products = \App\Models\Product::where('status', '1')->limit(4)->get();
            @endphp

            @if($products->count() > 0)
                @foreach($products as $index => $product)
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="{{ 0.3 + ($index * 0.2) }}s">
                        <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm d-flex flex-column">
                            @if($product->image)
                                <div class="product-img overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ Storage::url($product->image) }}" alt="{{ $product->product_name }}" style="height: 200px; object-fit: contain; background: #fff;">
                                </div>
                            @else
                                <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                                    <i class="fa fa-droplet fa-3x"></i>
                                </div>
                            @endif
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <h4 class="mb-3">{{ $product->product_name }}</h4>
                                @if($product->content)
                                    <p class="text-muted flex-grow-1">{{ Str::limit(strip_tags($product->content), 100) }}</p>
                                @else
                                    <p class="text-muted flex-grow-1">Precision-manufactured plastic component for reliable performance.</p>
                                @endif
                                @if($product->file_path)
                                    <a href="{{ Storage::url($product->file_path) }}" target="_blank" class="btn btn-primary rounded-pill mt-auto">Detail</a>
                                @else
                                    <button type="button" class="btn btn-primary rounded-pill mt-auto" onclick="alert('No file available for this product.')">Detail</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback products if no products in database -->
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                        <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                            <i class="fa fa-droplet fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Custom Plastic Components</h4>
                            <p class="text-muted">Precision injection-moulded components developed to your specifications.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-primary fw-bold text-decoration-none" href="{{ route('product-page') }}">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                        <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                            <i class="fa fa-cogs fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Mould Development</h4>
                            <p class="text-muted">Custom moulds engineered for precision and production durability.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-primary fw-bold text-decoration-none" href="{{ route('product-page') }}">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                        <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                            <i class="fa fa-industry fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">CNC Machined Parts</h4>
                            <p class="text-muted">High-precision machined components for complex applications.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-primary fw-bold text-decoration-none" href="{{ route('product-page') }}">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                        <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                            <i class="fa fa-layer-group fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Complete Assemblies</h4>
                            <p class="text-muted">End-to-end assembled products for OEM & private-label supply.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-primary fw-bold text-decoration-none" href="{{ route('product-page') }}">
                                    Learn More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- View All Products Button -->
        <div class="text-center mt-5">
            <a class="btn btn-primary py-3 px-5 rounded-pill" href="{{ route('product-page') }}">
                <i class="fa fa-eye me-2"></i>View All Products
            </a>
        </div>
    </div>
</div>