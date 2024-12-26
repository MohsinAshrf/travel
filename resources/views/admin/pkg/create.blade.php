@extends('admin.layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="text-center text-success mb-4">Add Pakage</h3>
            <div class="text-end my-1">
                <a href="{{route('pkgs.index')}}" class="btn text-light btn-sm btn-warning">Go to List</a>
            
            </div>
            <form action="{{route('pkgs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">City</label>
                    <input 
                        type="text" 
                        class="form-control @error('location') is-invalid @enderror" 
                        id="name" 
                        name="location" 
                        value="{{ old('location') }}" 
                        placeholder="Enter your name">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- days Field -->
                <div class="mb-3">
                    <label for="days" class="form-label">Days</label>
                    <input 
                        type="text" 
                        class="form-control @error('day') is-invalid @enderror" 
                        id="content" 
                        name="day" 
                        value="{{ old('day') }}" 
                        placeholder="Enter your content">
                    @error('day')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Image</label>
                    <input 
                        type="file" 
                        class="form-control @error('image') is-invalid @enderror" 
                        id="password" 
                        name="image" 
                        value="{{ old('image') }}"
                        placeholder="Enter your password">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                                <!-- Days Field -->

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input 
                        type="text" 
                        class="form-control @error('day') is-invalid @enderror" 
                        id="content" 
                        name="content" 
                        value="{{ old('content') }}" 
                        placeholder="Enter your content">
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection