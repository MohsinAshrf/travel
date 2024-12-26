@extends('admin.layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="text-center text-success mb-4">Register</h3>
            <div class="text-end my-1">
                <a href="{{route('users.index')}}" class="btn text-light btn-sm btn-warning">Go to List</a>
            
            </div>
            <form action="{{route('users.store')}}" method="POST">
                @csrf

                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Enter your name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Enter your email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        id="password" 
                        name="password" 
                        placeholder="Enter your password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Role Field -->
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class=" form-control @error('role') is-invalid @enderror" id="role" name="role">
                       {{-- <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option> --}}
                         <option value="1" @if(old('role') == 1) selected @endif>Admin</option>
                     <option value="2" @if(old('role') == 2) selected @endif>User</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection