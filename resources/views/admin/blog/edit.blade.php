@extends('admin.layout.main')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Blog</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Blog</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Create</a>
                </li>
            </ul>
            {{-- <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-primary btn-round">Add Blog</a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Blog Edit</div>
                    </div>
                    <form method="POST" action="{{ route('admin.blog.update', $blog->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="blog_heading">Blog Heading</label>
                                        <input type="text" name="blog_heading" class="form-control" id="blog_heading"
                                            placeholder="Enter Blog Heading"
                                            value="{{ old('blog_heading', $blog->blog_heading) }}" />
                                        @error('blog_heading')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="blog_date">Date</label>
                                        <input type="date" name="blog_date" class="form-control" id="blog_date"
                                            value="{{ old('blog_date', $blog->blog_date) }}" />
                                        @error('blog_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="blog_content">Blog Content</label>
                                        <textarea name="content" class="form-control" id="blog_content" rows="5" placeholder="Enter Blog Content">{{ old('content', $blog->content) }}</textarea>
                                        @error('content')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" name="image" class="form-control-file"
                                            id="exampleFormControlFile1" />
                                        <small class="form-text text-muted d-block mb-2">
                                            Upload an image (max 2MB, 550x550px)
                                        </small>
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="150" height="150" />

                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('admin-blog-page') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
