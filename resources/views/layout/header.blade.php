<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Peaks n Slope Gallery
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/img.png')}}" rel="icon" style="border-radius: 100%; ">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('../css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <div class="whatsapp">
        <a class="" target="blank" href=" https://wa.me/923008840170"><img  style="height:55px;width:55px;border-radius:25%" src="{{asset('img/whatsapp.webp')}}" alt="imgae"></a>

    </div>
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Khalid Road , Near Gol Masjid , Sheikhupura</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+923344512693</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>peaksnslopegallery@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-youtube-f fw-normal"></i></a> --}}
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a> --}}
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand  p-0 d-flex align-items-center">
                <div>
                    <img src="{{asset('img/img.png')}}" alt="Logo"class="rounded-circle" > 

                </div>
                <h4 class="text-primary m-0 ms-2">PeaksnSlopeGallery</h4>
            </a>
            <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}" class="nav-item {{Route::is('index') ? 'active' : ''}} nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item  {{Route::is('about') ? 'active' : ''}} nav-link">About</a>
                    <a href="{{ route('services') }}" class="nav-item {{Route::is('services') ? 'active' : ''}} nav-link">Services</a>
                    <a href="{{ route('packages') }}" class="nav-item  {{Route::is('packages') ? 'active' : ''}} nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('destination') }}" class="dropdown-item">Destination</a>
                            <a href="{{ route('booking') }}" class="dropdown-item">Booking</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link  {{Route::is('contact') ? 'active' : ''}}">Contact</a>
                    
                {{-- <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a> --}}
            </div>
        </nav>

        
   

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let spinner = document.getElementById("spinner");
            if (spinner) {
                spinner.classList.remove("show");
            }
        });
    </script>
    
   