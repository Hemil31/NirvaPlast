@extends('admin.layout.main')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Inquiries</h3>
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
                    <a href="#">Inquiries</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Listing</a>
                </li>
            </ul>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inquiries</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="inquire-datatables" class="display table table-striped table-hover" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th style="width: 8%">Sr</th>
                                        <th style="width: 20%">Name</th>
                                        <th style="width: 25%">Email</th>
                                        <th style="width: 15%">Mobile</th>
                                        {{-- <th>Service Type</th> --}}
                                        <th style="width: 32%">Message</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @empty($inquires)
                                        <tr>
                                            <td colspan="5" class="text-center">No inquiries found</td>
                                        </tr>
                                    @endempty
                                    @foreach ($inquires as $inquire)
                                        <tr>
                                            <td style="width: 8%">{{ $loop->iteration }}</td>
                                            <td style="width: 20%; word-wrap: break-word;">{{ $inquire->name ?? null }}</td>
                                            <td style="width: 25%; word-wrap: break-word;">{{ $inquire->email ?? null }}</td>
                                            <td style="width: 15%; word-wrap: break-word;">{{ $inquire->mobile ?? null }}</td>
                                            {{-- <td>{{ $inquire->service_type ?? null }}</td> --}}
                                            <td style="width: 32%; word-wrap: break-word; max-width: 200px;">{{ $inquire->message ?? null }}</td>
                                            {{-- <td>
                                                <a href="{{ route('admin-inquire-edit-page', $inquire->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admin.inquire.delete', $inquire->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td> --}}
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
            $('#inquire-datatables').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "columnDefs": [
                    { "width": "8%", "targets": 0 },
                    { "width": "20%", "targets": 1 },
                    { "width": "25%", "targets": 2 },
                    { "width": "15%", "targets": 3 },
                    { "width": "32%", "targets": 4 }
                ],
                "fixedColumns": true
            });
        });
    </script>
@endpush
