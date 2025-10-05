<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Products</h5>
            <h1 class="mb-0">Premium Quality Chemical Products</h1>
        </div>
        <div class="row g-4">
            @php
                $products = \App\Models\Product::where('status', '1')->limit(4)->get();
            @endphp

            @if($products->count() > 0)
                @foreach($products as $index => $product)
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="{{ 0.3 + ($index * 0.2) }}s">
                        <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                            @if($product->image)
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ Storage::url($product->image) }}" alt="{{ $product->product_name }}" style="height: 200px; object-fit: cover;">
                                    <div class="product-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('product-page') }}">
                                            <i class="fa fa-eye me-2"></i>View Details
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                                    <i class="fa fa-flask fa-3x"></i>
                                </div>
                            @endif
                            <div class="p-4">
                                <h4 class="mb-3">{{ $product->product_name }}</h4>
                                @if($product->content)
                                    <p class="text-muted">{{ Str::limit(strip_tags($product->content), 100) }}</p>
                                @else
                                    <p class="text-muted">High quality chemical product for industrial applications.</p>
                                @endif
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="text-primary fw-bold text-decoration-none" href="{{ route('product-page') }}">
                                        Learn More <i class="bi bi-arrow-right"></i>
                                    </a>
                                    @if($product->file_path)
                                        <a class="btn btn-outline-primary btn-sm" href="{{ Storage::url($product->file_path) }}" target="_blank">
                                            <i class="fa fa-download me-1"></i>PDF
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback products if no products in database -->
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="product-item bg-light rounded overflow-hidden h-100 shadow-sm">
                        <div class="product-img-placeholder d-flex align-items-center justify-content-center bg-primary text-white" style="height: 200px;">
                            <i class="fa fa-flask fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Acetic Acid</h4>
                            <p class="text-muted">High purity acetic acid for industrial and commercial applications.</p>
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
                            <i class="fa fa-vial fa-3x"></i>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Acetone</h4>
                            <p class="text-muted">Premium quality acetone for cleaning and solvent applications.</p>
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
                            <h4 class="mb-3">Aluminium Sulphate</h4>
                            <p class="text-muted">Industrial grade aluminium sulphate for water treatment and manufacturing.</p>
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
                            <h4 class="mb-3">ACETIC ACID</h4>
                            <p class="text-muted">Industrial grade aluminium sulphate for water treatment and manufacturing.</p>
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

<style>
.product-item {
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.product-img {
    overflow: hidden;
}

.product-img img {
    transition: transform 0.3s ease;
}

.product-item:hover .product-img img {
    transform: scale(1.1);
}

.product-overlay {
    background: rgba(6, 163, 218, 0.8);
    opacity: 0;
    transition: all 0.3s ease;
}

.product-item:hover .product-overlay {
    opacity: 1;
}

.product-img-placeholder {
    background: linear-gradient(45deg, var(--primary), var(--secondary));
}

.btn-outline-primary:hover {
    background-color: var(--primary);
    border-color: var(--primary);
    color: white;
}
</style>
