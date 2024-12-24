@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Add Feedback</h1>

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
@endsection
