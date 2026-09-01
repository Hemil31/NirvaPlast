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
                    <a href="#">Edit</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Team Member</div>
                    </div>
                    <form method="POST" action="{{ route('admin.team.update', $teamMember->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name" value="{{ old('name', $teamMember->name) }}" />
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <input type="text" name="role" class="form-control" id="role"
                                            placeholder="Enter Role" value="{{ old('role', $teamMember->role) }}" />
                                        @error('role')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="image">Image (max 2MB)</label>
                                        <input type="file" name="image" class="form-control" id="image" />
                                        <small class="form-text text-muted d-block mb-2">
                                            Upload a new image (leave empty to keep current image)
                                        </small>
                                        @if ($teamMember->image)
                                            <small class="form-text text-info d-block mb-2">
                                                Current image:
                                                @if (str_starts_with($teamMember->image, 'front/'))
                                                    <img src="{{ asset($teamMember->image) }}" alt="current"
                                                        style="width:50px;height:50px;object-fit:cover;" class="rounded">
                                                @else
                                                    <img src="{{ Storage::url($teamMember->image) }}" alt="current"
                                                        style="width:50px;height:50px;object-fit:cover;" class="rounded">
                                                @endif
                                            </small>
                                        @endif
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="1" {{ old('status', $teamMember->status) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $teamMember->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" rows="3"
                                            placeholder="Enter short description">{{ old('description', $teamMember->description) }}</textarea>
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('admin-team-page') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
