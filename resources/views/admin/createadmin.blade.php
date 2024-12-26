@extends('admin.layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Users </p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item "><a href="{{route('users.index')}}" class="text-info">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Users</li>
                </ol>
              </nav>
        </div>
    </div>
    

    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header ">
            <div class="row">
                <div class="col-md-6">

                    <p class="mb-0 p-0 fs-5">Register</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
                        <a href="{{route('users.index')}}" class="btn-sm btn btn-outline-warning">Go to list</a>
                    
                    </div>
                </div>
                </div>
                </div>
                <div class="card-body">
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