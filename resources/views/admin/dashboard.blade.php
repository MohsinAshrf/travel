@extends('admin.layout.main')
@section('content')

    <!-- Main Layout -->
   
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1 class="my-4 h2">Welcome {{auth()->user()->name}} to the Dashboard</h1>
                <p>Here you can manage destinations, users, and more.</p>
            </main>
       
   
@endsection