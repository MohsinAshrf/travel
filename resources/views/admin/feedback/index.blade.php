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
                  <li class="breadcrumb-item active" aria-current="page">Feedback </li>
                </ol>
              </nav>
        </div>
    </div>
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
    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
        
                    <p class="mb-0 p-0 fs-5">Feedback Details</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
                     <a href="{{route('feedbacks.create')}}" class="btn btn-sm btn-outline-info">Add New</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
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
    </div>
</div>



  
@endsection
