@extends('admin.layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <h3 class="text-center text-success mb-4">Edit Pakage</h3>
            <form action="{{route('pkgs.update',$pkg->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label">City</label>
                    <input 
                        type="text" 
                        class="form-control @error('location') is-invalid @enderror" 
                        id="name" 
                        name="location" 
                        value="{{ $pkg->location}}" 
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
                        value="{{ $pkg->day }}" 
                        placeholder="Enter your content">
                    @error('day')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Image</label>
                    @if ($pkg->image)
                   <img src="{{ asset('storage/'.$pkg->image) }}" alt="profile image" style="width: 60px;height:60px">
                    {{-- <p>{{ basename($pkg->image) }}</p> <!-- Display only the image filename --> --}}
                @else
                    
                @endif
                @php
                    
                    if ($pkg->image){

                        $pkg->img = basename($pkg->image);
                    }
                    
                @endphp
                {{   $pkg->img}}
                    <input 
                        type="file" 
                        class="form-control mt-2 @error('image') is-invalid @enderror" 
                        id="password" 
                        name="image" 
                        value="{{old('image')}}"
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
                        value="{{ $pkg->content}}" 
                        placeholder="Enter your content">
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection