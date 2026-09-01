@extends('admin.layout.main')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Team Member</h3>
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
                    <a href="#">Team Member</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Listing</a>
                </li>
            </ul>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="{{ route('admin-team-create-page') }}" class="btn btn-primary btn-round">Add Team Member</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Team Member</h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($teamMembers->isEmpty())
                                        <tr>
                                            <td colspan="6" class="text-center">No Team Members found</td>
                                        </tr>
                                    @endif
                                    @foreach ($teamMembers as $member)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->role }}</td>
                                            <td>
                                                @if (str_starts_with($member->image, 'front/'))
                                                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}"
                                                        style="width:50px;height:50px;object-fit:cover;" class="rounded">
                                                @else
                                                    <img src="{{ Storage::url($member->image) }}" alt="{{ $member->name }}"
                                                        style="width:50px;height:50px;object-fit:cover;" class="rounded">
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge {{ $member->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $member->status == 1 ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <button
                                                    onclick="window.location='{{ route('admin.team-edit-page', $member->id) }}'"
                                                    class="btn btn-warning btn-sm">Edit</button>
                                                <form action="{{ route('admin.team.delete', $member->id) }}" method="POST"
                                                    style="display:inline;"
                                                    onsubmit="return confirm('Are you sure you want to delete this team member?');">
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
