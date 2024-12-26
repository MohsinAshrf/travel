@extends('admin.layout.main')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container">
        <!-- Heading with custom color -->
        <h1 style="color: #86b817;">All Feedback</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('feedbacks.create') }}" class="btn btn-outline-success mb-3">Add Feedback</a>
        </div>

      <div class=" table-responsive">
        <table class="table " >
            <thead class=" bg-dark text-white"  >
                <tr>
                    <th>Comment</th>
                    <th>Video</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                    <tr class="align-middle"> <!-- Ensuring vertical centering -->
                        <td class="align-middle">{{ $feedback->comment }}</td>
                        <td class="align-middle">
                            @if($feedback->video)
                                <video width="90" height="90" controls>
                                    <source src="{{ asset('storage/' . $feedback->video) }}" type="video/mp4">
                                </video>
                            @else
                                No video uploaded
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="d-flex">
                                <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
                                <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ms-1 btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
@endsection
