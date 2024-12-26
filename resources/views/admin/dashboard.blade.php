@extends('admin.layout.main')
@section('content')

    <!-- Main Layout -->
   
            <!-- Main Content -->
            <main class="container-fluid">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="mb-0">Wellcome <strong>{{Str::upper(auth()->user()->name)}}</strong>  to the dashboard. <br></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


                <div class="row">
                    <div class="col-md-3 ">
                        <div class="container bg-success shadow rounded-3">
                            <div class="row  text-light py-2">
                                <div class="col-6">
                                    <p class="fs-2 mb-0 "><i class="fas fa-users"></i></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 fs-2">{{$totalUsers}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 ">
                         <div class="container bg-info shadow rounded-3">
                            <div class="row  text-light py-2">
                                <div class="col-6">
                                    <p class="fs-2 mb-0 "><i class="fas fa-paper-plane"></i></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 fs-2">{{$totalContact}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                         <div class="container bg-secondary shadow rounded-3">
                            <div class="row  text-light py-2">
                                <div class="col-6">
                                    <p class="fs-2 mb-0 "><i class="fas fa-receipt"></i></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 fs-2">{{$totalBook}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                         <div class="container bg-danger shadow rounded-3">
                            <div class="row  text-light py-2">
                                <div class="col-6">
                                    <p class="fs-2 mb-0 "><i class="fas fa-box"></i></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-0 fs-2">{{$totalPkg}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
       

            
   
@endsection