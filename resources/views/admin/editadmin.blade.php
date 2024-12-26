@extends('admin.layout.main')

@section('content')


<h3 class="text-center text-success mb-4">Edit User</h3>
<div class="text-end my-1">
    <a href="{{route('users.index')}}" class="btn btn-danger btn-sm">Back</a>

</div>
<form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select class="form-select" id="role" name="role" required>
            <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
            <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>User</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Profile Image</label>
        @if($user->image)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="img-thumbnail" style="width: 100px; height: 100px;">
            </div>
        @endif
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <small class="form-text text-muted">Leave blank to keep the current password.</small>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
</form>

@endsection
