@extends('admin.layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Pakage</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item "><a href="{{route('pkgs.index')}}" class="text-info">Pakage</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pakage Create</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">

                    <p class="mb-0 p-0 fs-5">Users Details</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
                        <a href="{{route('pkgs.index')}}" class="btn text-light btn-sm btn-info">Go to List</a>
                    
                    </div>
                </div>
            </div>


        </div>
        <div class="card-body">
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