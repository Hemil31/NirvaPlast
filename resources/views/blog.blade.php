@extends('layout.main')
@section('title', 'Blog')
@section('breadcrumbTitle', 'Blog')
@section('breadcrumbActive', 'Blog')
@section('content')

    <div class="container py-5">
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="card h-100 shadow border-0 rounded-3 overflow-hidden blog-card">
                        <div class="blog-img-wrapper">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->blog_heading }}"
                                class="card-img-top blog-img">
                        </div>
                        @php
                            $date = \Carbon\Carbon::parse($blog->blog_date);
                        @endphp
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3 text-muted small">
                                <div class="me-3 text-center bg-light px-2 py-1 rounded">
                                    <div class="fw-bold">{{ $date->format('d') }}</div>
                                    <div>{{ $date->format('M Y') }}</div>
                                </div>
                            </div>
                            <h5 class="card-title fw-bold">
                                <a href="#" class="text-decoration-none text-dark hover-primary">
                                    {{ $blog->blog_heading }}
                                </a>
                            </h5>
                            <p class="card-text text-muted">
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 150, '...') }}
                            </p>
                            {{-- <a href="blog-single.html" class="btn btn-outline-primary btn-sm">Read more</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="row mt-5">
            <div class="col text-center">
                {{-- {{ $blogs->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </div>

    {{-- Custom Styles --}}
    <style>
        .blog-img-wrapper {
            height: 250px;
            overflow: hidden;
        }

        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .3s ease-in-out;
        }

        .blog-card:hover .blog-img {
            transform: scale(1.05);
        }

        .hover-primary:hover {
            color: #348E38 !important;
        }
    </style>

@endsection
