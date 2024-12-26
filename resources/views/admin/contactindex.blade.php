@extends('admin.layout.main')

@section('content')


<div class="container ">

    <div class="row">
        <div class="col-md-6">
            <p class="fs-4 heading mb-0">Contacts</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end ">
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{route('dashboard')}}" class="text-info">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
        <div class="card-header ">
            <div class="row">
                <div class="col-md-6">

                    <p class="mb-0 p-0 fs-5">Contacts List</p>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
           
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark text-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <!-- Example action buttons -->
                                    {{-- <a href="#" class="btn btn-info btn-sm">View</a> --}}
                                    {{-- <a href="#" class="btn btn-warning btn-sm">Edit</a> --}}
                                    <form action="{{route('contacts.destroy',$contact)}}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No contacts found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   

    
</div>
@endsection