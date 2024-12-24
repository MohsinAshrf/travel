@extends('admin.layout.main')
@section('content')

<h3 class="text-center text-success mb-4"> Bookings Details </h3>
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
                <th>Actions</th>
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
                        class="ml-1 btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $users->links() }}
    </div>
    
</div>

@endsection