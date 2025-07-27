@extends('layout.main')
@section('title', 'Blog')
@section('breadcrumbTitle', 'Blog')
@section('breadcrumbActive', 'Blog')
@section('content')


    <div class="container py-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top"
                        style="background-image: url('https://picsum.photos/200/300'); height: 200px; background-size: cover; background-position: center;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-center">
                                <div class="h4 mb-0">24</div>
                            </div>
                            <div>
                                <div class="text-muted small">January</div>
                                <div class="text-muted small">2020</div>
                            </div>
                        </div>
                        <h5 class="card-title"><a href="blog-single.html" class="text-decoration-none text-dark">All you
                                want to know about industrial laws</a></h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top"
                        style="background-image: url('https://picsum.photos/200/300'); height: 200px; background-size: cover; background-position: center;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-center">
                                <div class="h4 mb-0">24</div>
                            </div>
                            <div>
                                <div class="text-muted small">January</div>
                                <div class="text-muted small">2020</div>
                            </div>
                        </div>
                        <h5 class="card-title"><a href="blog-single.html" class="text-decoration-none text-dark">All you
                                want to know about industrial laws</a></h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top"
                        style="background-image: url('https://picsum.photos/200/300'); height: 200px; background-size: cover; background-position: center;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-center">
                                <div class="h4 mb-0">24</div>
                            </div>
                            <div>
                                <div class="text-muted small">January</div>
                                <div class="text-muted small">2020</div>
                            </div>
                        </div>
                        <h5 class="card-title"><a href="blog-single.html" class="text-decoration-none text-dark">All you
                                want to know about industrial laws</a></h5>
                        <p class="card-text">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>






@endsection
