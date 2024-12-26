@extends('admin.layout.main')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<h3 class="text-center text-success mb-4"> All Users </h3>
<div class="text-end my-1">
    <a href="{{route('users.create')}}" class="btn btn-outline-success">Add New</a>

</div>
 <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
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
                        <a href="{{route('users.edit' , $user->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
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
@endsection


