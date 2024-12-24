<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: lightgreen;
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
            background-color: #f4f6f8;
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
            background-color: #86b817;
            color: white;
        }
        .sidebar a.active {
            background-color: #86b817;
            color: white;
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img  src="{{ asset('img/img.png') }}" alt="Logo" style="height: 70px; width:70px" class="rounded-circle">
            
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex align-items-center">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="profile-img me-2">
                    <span class="text-white">Admin</span>
                </li>
            </ul>
        </div>
    </nav>
