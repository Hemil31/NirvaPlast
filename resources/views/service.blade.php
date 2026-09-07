@extends('layout.main')
@section('seo_title', 'Capabilities | Precision Moulding, CNC Machining & Assembly | NIRVA Technoplast')
@section('seo_description', 'End-to-end plastic engineering and manufacturing capabilities: precision moulding, mould development, CNC machining, custom component production, high-volume injection moulding and automated assembly.')
@section('seo_keywords', 'precision moulding, mould development, CNC machining, plastic engineering, custom plastic components, high-volume injection moulding, automated assembly, NIRVA Technoplast')
@section('breadcrumbTitle', 'Capabilities')
@section('breadcrumbActive', 'Capabilities')
@section('content')
    @include('components.services')
    @include('components.quality')

    <!-- End-To-End Process Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3 mb-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">How We Work</h5>
                <h1 class="mb-0">From Manufacturing Complexity to Precision, Quality & Reliability</h1>
            </div>
            <p class="text-center text-muted mb-5 mx-auto" style="max-width: 800px;">The nebulizer mask industry
                requires consistent product quality, patient-safe materials, competitive pricing and reliable
                high-volume production. NIRVA meets these needs through precision injection moulding, scalable
                production and OEM-focused manufacturing solutions.</p>
            <div class="row g-4 text-center">
                @php
                    $steps = [
                        ['icon' => 'bi bi-lightbulb', 'title' => 'Requirement Discussion', 'desc' => 'Understand your specification, volume and material needs.'],
                        ['icon' => 'bi bi-box-seam', 'title' => 'Sampling', 'desc' => 'Precision-manufactured samples for evaluation.'],
                        ['icon' => 'bi bi-clipboard-check', 'title' => 'Approval', 'desc' => 'Product evaluation and approval for production.'],
                        ['icon' => 'bi bi-gear-wide-connected', 'title' => 'Bulk Production', 'desc' => 'High-volume, consistent moulded output.'],
                        ['icon' => 'bi bi-arrow-repeat', 'title' => 'Repeat Orders', 'desc' => 'Recurring supply with committed timelines.'],
                    ];
                @endphp
                @foreach ($steps as $index => $step)
                    <div class="col-lg col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.15) }}s">
                        <div class="bg-light rounded p-4 shadow-sm h-100">
                            <div class="icon-box-primary mb-3">
                                <i class="{{ $step['icon'] }} text-dark"></i>
                            </div>
                            <h6 class="mb-2">{{ $step['title'] }}</h6>
                            <small class="text-muted">{{ $step['desc'] }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End-To-End Process End -->
@endsection