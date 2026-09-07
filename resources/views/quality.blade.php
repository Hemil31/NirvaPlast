@extends('layout.main')
@section('seo_title', 'Quality & Compliance | Medical-Grade Manufacturing | NIRVA Technoplast')
@section('seo_description', 'NIRVA Technoplast applies medical-grade material selection, strict quality assurance and consistent process control across precision injection moulding to deliver safe, reliable nebulizer masks and plastic components.')
@section('seo_keywords', 'quality assurance, medical-grade manufacturing, quality control, precision moulding, nebulizer mask quality, NIRVA Technoplast, plastic manufacturing quality')
@section('breadcrumbTitle', 'Quality & Compliance')
@section('breadcrumbActive', 'Quality')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "serviceType": "Quality Assurance and Medical-Grade Manufacturing",
    "provider": {
        "@@type": "Organization",
        "name": "NIRVA Technoplast Private Limited"
    },
    "description": "Medical-grade material selection, precision injection moulding and strict quality checks for safe, reliable and consistent plastic products."
}
</script>
@endpush
@section('content')
    @include('components.quality')

    <!-- Quality Approach Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="fw-bold text-primary text-uppercase mb-2">Built Into Every Component</h5>
                    <h1 class="display-6 mb-4">Consistent Quality from Material to Finished Part</h1>
                    <p class="mb-4">From medical-grade material selection to precision injection moulding, our
                        manufacturing focus is on quality assurance, safety, consistency and reliable delivery.
                        Testing and quality systems are applied across production so every bulk order meets the
                        same standard.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Medical-grade material selection</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Precision injection moulding & process control</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Consistent quality across high-volume batches</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Testing and quality systems across production</li>
                        <li class="mb-0"><i class="fa fa-check-circle text-primary me-2"></i>Reliable, on-time delivery for recurring orders</li>
                    </ul>
                    <a href="{{ route('contact-page') }}" class="btn btn-primary py-3 px-5 rounded-pill">Discuss Your Quality Requirement</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100 rounded shadow" src="{{ asset('front/img/carousel-2.jpg') }}" alt="Precision Manufacturing Quality">
                </div>
            </div>
        </div>
    </div>
    <!-- Quality Approach End -->
@endsection
