  @include('admin.layout.header')
  <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.layout.sidebar') 
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                @yield('content') 
            </div>
        </div>
    </div>

    <!-- Add footer -->
    @include('admin.layout.footer')