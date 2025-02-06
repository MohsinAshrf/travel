<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: black;
            color: white;
        }
        .navbar-brand {
            font-weight: 600;
            color: white;
        }
        .navbar .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
        }
        .sidebar {
            /* background-color: #f4f6f8; */
            background-color: rgb(105, 102, 255);
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            min-height: 100vh;
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #fff;
            color: rgb(105, 102, 255);
        }
        .sidebar a.active {
            background-color: #fff;
            color: rgb(105, 102, 255);
        }
        .sidebar .icon {
            margin-right: 10px;
        }
        .sidebar .dropdown-menu {
            padding-left: 20px;
        }
        
        .footer {
            text-align: center;
            padding: 10px;
            background: #f8f9fa;
            border-top: 1px solid #ddd;
            position: relative;
            width: 100%;
        }
        .sidebar .dropdown-icon {
            margin-left: auto;
        }
        .heading{
            color: #6966ff;
        }
        #openSidebar{
                display: none;
            }
        @media screen and (max-width:768px){
            #openSidebar{
                display: block;
            }
            #selfSidebar{
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{route('index')}}">
                {{-- <img  src="{{ asset('img/img.png') }}" alt="Logo" style="height: 50px; width:50px" class="rounded-circle"> --}}
            <p class="text-light fs-4 mb-0">PeaksnSlopeGallery</p>
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex align-items-center">
                    {{-- <img src="{{ asset('img/profile.jpg') }}" alt="Profile" class="profile-img me-2">
                    <span class="text-white">Admin</span> --}}
                    
                    <div class="dropstart">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          {{auth()->user()->name}} <i class="fas fa-user-alt"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{route('users.edit',auth()->user()->id)}}">Profile</a></li>
                          <li>
                            <form action="{{route('logout')}}"  method="post">
                                @csrf
                                <input class="dropdown-item" value="Logout"   type="submit" />
                            </form>
                        </li>
                        </ul>
                    </div>
                    <button class="btn btn-light ms-2" id="openSidebar"><i class="fas fa-bars"></i></button>
                </li>
            </ul>
        </div>
    </nav>
