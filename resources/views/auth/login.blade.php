<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aarav Raj</title>
     @vite(['resources/js/app.js'])
    <!-- AdminLTE CSS -->
   <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.css')}}" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- Login Logo -->
    <div class="login-logo">
       Aarav Raj
    </div>
    
    <!-- Login Card -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                   <!-- Verification Notice -->
                @if(session('unverified'))
                <div class="mb-4 bg-yellow-50 border-l-4 border-yellow-400 p-4">
                  Please verify your email address before logging in. ' . 
                              'Check your inbox for the verification link.
                </div>
                @endif
                
                <!-- Email Field -->
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Email" value="{{ old('email') }}" required autofocus>                  
                     
                        <span class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </span>
                   
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
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
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                </div>
                
                <!-- Remember Me & Submit -->
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <!-- Additional Links -->
            @if (Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </p>
            @endif
            @if (Route::has('register'))
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">Register New Account</a>
                </p>
            @endif
        </div>
    </div>
</div>

<!-- AdminLTE JS (optional - only if you need JS functionality) -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>