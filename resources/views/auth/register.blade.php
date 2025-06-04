<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aarav Raj</title>
     @vite(['resources/js/app.js'])
    <!-- AdminLTE CSS -->
   <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.css')}}" />
   <link rel="stylesheet" href="{{ asset('admins/dist/css/custom.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="/">Aarav Raj</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register') }}" method="post">
                @csrf
                
                <!-- Name Field -->
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                           placeholder="Full name" value="{{ old('name') }}" required autofocus>
               
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                 
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Email Field -->
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Email" value="{{ old('email') }}" required>
                   
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                   
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Password Field -->
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Password" required>
                   
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                   
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- Confirm Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" 
                           placeholder="Retype password" required>
                   
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>                   
                </div>
                
                <div class="row">
                   
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary ">Register</button>
                    </div>
                </div>
            </form>


            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
    </div>
</div>

<!-- AdminLTE JS -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>