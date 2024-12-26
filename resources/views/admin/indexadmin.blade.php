@extends('admin.layout.main')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Users </p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header ">
            <div class="row">
                <div class="col-md-6">

                    <p class="mb-0 p-0 fs-5">Users Details</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
                        <a href="{{route('users.create')}}" class="btn-sm btn btn-outline-info">Add New</a>
                    
                    </div>
                </div>
            </div>
           
        </div>
        <div class="card-body">
           
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead >
                        <tr class="text-white" style="background-color: #6966ff;">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Profile Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role == 1 ? 'admin' :  'user'  }}</td>
                            <td>
                                @if($user->image)
                                <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="img-thumbnail" style="width: 50px; height: 50px;">
                                @else
                                <span>No Image</span>
                                @endif 
                            </td>
                            <td>
                                <div class="d-flex ">
                                    <a href="{{route('users.edit' , $user->id)}}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy' , $user->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="ms-1 btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                                {{-- <a href="{{route('users.destroy' , $user->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}
                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



</div>
@endsection


