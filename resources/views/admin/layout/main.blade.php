  @include('admin.layout.header')
  <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.layout.sidebar') 
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4 bg-light">
                @yield('content') 
            </div>
        </div>
    </div>

<script>
    let width = 0;
    const menuBtn = document.getElementById('openSidebar');
    menuBtn.addEventListener('click',()=>{
        if(width == 0){
            const sidebar = document.getElementById('selfSidebar');
            sidebar.style.display = "block";
            width=1;
        }else{
            const sidebar = document.getElementById('selfSidebar');
            sidebar.style.display = "none";
            width=0;
        }
    })
</script>

    <!-- Add footer -->
    @include('admin.layout.footer')