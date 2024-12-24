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
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<h3 class="text-center text-success mb-4"> All Pakages</h3>
 <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>City</th>
                <th>Days</th>
                <th>Content</th>
                <th>Actions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pkgs as $key => $pkg)
            <tr>
                <td><strong>{{ $pkg->id}}</strong></td>
                <td> 
                    <img src="{{ asset('storage/' . $pkg->image) }}" alt="Profile Image" class="img-thumbnail" style="width: 70px; height: 70px;">
                  
                </td>
                <td>{{ $pkg->location}}</td>
                <td>{{ $pkg->day}}</td>
                <td>{{ $pkg->content}}</td>
                   <td>
                    <a href="{{route('pkgs.edit' , $pkg->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    {{-- <a href="{{route('pkgs.destroy' , $pkg->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}
                
                </td>
                <td><form action="{{ route('pkgs.destroy' , $pkg->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="ml-1 btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


