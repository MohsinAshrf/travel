@extends('admin.layout.main')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Bookings</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bookings</li>
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
    <div class="card mt-2 border-0 shadow-sm">
<div class="card-header">
    <div class="row">
        <div class="col-md-6">

            <p class="mb-0 p-0 fs-5">Booking Details</p>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Cinc</th>
                    <th>Designation</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Book Date</th>
                    {{-- <th>Actions</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->cnic}}</td>
                    <td>{{ $user->city}}</td>
                    <td>{{ $user->contact_no}}</td>
                    <td>{{ $user->address}}</td>
                    <td>{{ $user->created_at}}</td>
                    
                  
                    
                    <td><form action="{{ route('book.destroy' , $user->id) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="ml-1 btn btn-outline-danger btn-sm">Delete</button>
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
    </div>
</div>


 
    
</div>

@endsection