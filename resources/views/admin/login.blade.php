<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: Arial,"Nunito", sans-serif
        }
        .login-box {
            width: 400px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-box img {
            display: block;
            margin: 0 auto 20px;
            height: 80px;
        }
        .btn-login {
            background-color: #86b817;
            color: #edeeea;
            border-radius: 50px;
        }
        .btn-login:hover {
            background-color: #86B817;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box text-center">
            <!-- Logo -->
            <img class="rounded-circle" src="{{ asset('img/a.jpg') }}" alt="Logo">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if(session('error'))

                <div class="text-danger">  * {{ session('error') }}</div>
                @endif

                <!-- Email -->
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Password -->
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <!-- Login Button -->
                <button type="submit" class="btn btn-login w-100 py-2">LOGIN</button>
                <div class="mt-3 mb-3 text-start">
                
                </div>
            </form>
        </div>
    </div>
</body>
</html>
