@extends('admin.layout.main')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Product</h3>
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
                    <a href="#">Product</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Edit</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Product</div>
                    </div>
                    <form method="POST" action="{{ route('admin.product.update', $Product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" name="product_name" class="form-control" id="product_name"
                                            placeholder="Enter Product Name" value="{{ old('product_name', $Product->product_name) }}" />
                                        @error('product_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="file_path">File (max 2MB)</label>
                                        <input type="file" name="file_path" class="form-control" id="file_path" />
                                        <small class="form-text text-muted d-block mb-2">
                                            Upload a new file (leave empty to keep current file)
                                        </small>
                                        @if($Product->file_path)
                                            <small class="form-text text-info d-block mb-2">
                                                Current file: <a href="{{ Storage::url($Product->file_path) }}" target="_blank">{{ basename($Product->file_path) }}</a>
                                            </small>
                                        @endif
                                        @error('file_path')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="1" {{ old('status', $Product->status) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $Product->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('admin-product-page') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
