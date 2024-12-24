@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Edit Feedback</h1>

        <!-- Form to edit the feedback -->
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
@endsection
