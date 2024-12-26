@extends('admin.layout.main')

@section('content')


<div class="container mt-5">
    <h1 class="text-center">Contact List</h1>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <table class="table table-striped table-bordered">
        <thead>
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
@endsection