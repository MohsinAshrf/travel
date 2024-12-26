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
                  <li class="breadcrumb-item active" aria-current="page">Feedback Edit</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
        
                    <p class="mb-0 p-0 fs-5">Feedback Edit</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
                     <a href="{{route('feedbacks.index')}}" class="btn btn-sm btn-danger">Back</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('feedbacks.update', $feedback->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')  <!-- This indicates that we are making an update request -->
    
                <!-- Comment Field -->
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment">{{ old('comment', $feedback->comment) }}</textarea>
                    @error('comment')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Video Upload Field -->
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video</label>
                    @if ($feedback->video)
                        <!-- Display the current video -->
                        <video width="90" height="90" controls>
                            <source src="{{ asset('storage/' . $feedback->video) }}" type="video/mp4">
                        </video>
                        <p>Current video: {{ basename($feedback->video) }}</p>
                    @else
                        No video uploaded
                    @endif
    
                    <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" name="video" accept="video/*">
                    @error('video')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update Feedback</button>
                </div>
            </form>
        </div>
    </div>
</div>



   
@endsection
