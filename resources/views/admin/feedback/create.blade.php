@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Feedback</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item "><a href="{{route('feedbacks.index')}}" class="text-info">Feedback</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Feedback Create</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="card  mt-2 border-0 shadow-sm">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
        
                    <p class="mb-0 p-0 fs-5">Feedback Create</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
        <a href="{{route('feedbacks.index')}}" class="btn btn-sm btn-outline-warning">Go to list</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <!-- Comment Field -->
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea name="comment" id="comment" value="{{ old('comment') }}" class="form-control @error('comment') is-invalid @enderror"></textarea>
                    @error('comment')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Video Field -->
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video </label>
                    <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video">
                    @error('video')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-success">Save Feedback</button>
            </form>
        </div>
    </div>
</div>



 
       

@endsection
