@extends('admin.layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Package</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item "><a href="{{route('pkgs.index')}}" class="text-info">Package</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Package Create</li>
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
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="card mt-2 border-0 shadow-sm">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">

                    <p class="mb-0 p-0 fs-5">Packages Details</p>
                </div>
                <div class="col-md-6">
                    <div class="text-end my-1">
    <a href="{{route('pkgs.create')}}" class="btn btn-sm btn-outline-info">Add New</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>City</th>
                            <th>Days</th>
                            <th>Content</th>
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
                               <td >
                               <div class="d-flex"> <a href="{{route('pkgs.edit' , $pkg->id)}}" class="btn  btn-outline-info btn-sm ">Edit</a>
                                {{-- <a href="{{route('pkgs.destroy' , $pkg->id)}}" class="btn btn-danger btn-sm">Delete</a> --}}
                            
                            <form action="{{ route('pkgs.destroy' , $pkg->id) }}" method="POST">
            
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="ms-1 btn btn-outline-danger btn-sm">Delete</button>
                            </form></div>
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


