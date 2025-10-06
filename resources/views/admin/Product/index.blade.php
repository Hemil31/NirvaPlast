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
                    <a href="#">Listing</a>
                </li>
            </ul>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="{{ route('admin-product-create-page') }}" class="btn btn-primary btn-round">Add Product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Product Name</th>
                                        <th>File </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @empty($Products)
                                        <tr>
                                            <td colspan="5" class="text-center">No Products found</td>
                                        </tr>
                                    @endempty
                                    @foreach ($Products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>
                                                <a href="{{ Storage::url($product->file_path) }}" target="_blank">View
                                                    File</a>
                                            </td>
                                            <td>
                                                <button
                                                    onclick="window.location='{{ route('admin.product-edit-page', $product->id) }}'"
                                                    class="btn btn-warning btn-sm">Edit</button>
                                                <form action="{{ route('admin.product.delete', $product->id) }}"
                                                    method="POST" style="display:inline;"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
