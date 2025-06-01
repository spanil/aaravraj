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
<body class="hold-transition register-page">
<div class="register-box">
 <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Forgot Your Password?</p>

           <form method="POST" action="{{ route('password.email') }}">
                @csrf
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
                
             
                
                <div class="row">
                   
                     <div class="d-grid">
                       <button type="submit" class="btn btn-primary btn-block">Send Reset Link</button>
                    </div>
                </div>
            </form>

       

           
        </div>
    </div>
</div>

<!-- AdminLTE JS -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
