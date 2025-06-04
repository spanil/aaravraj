<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aarav Raj</title>
    
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/dist/css/custom.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap (for remember me checkbox) -->
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
</head>
<body class="hold-transition login-page">
@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-6">Verify Your Email Address</h1>
    
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 bg-green-50 border-l-4 border-green-400 p-4">
            <p class="text-green-700">A fresh verification link has been sent to your email address.</p>
        </div>
    @endif
    
    <div class="mb-6">
        <p>Before proceeding, please check your email for a verification link.</p>
        <p class="mt-2">If you didn't receive the email,</p>
    </div>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
            Click here to request another
        </button>
    </form>
    
    <div class="mt-4 text-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-blue-500 hover:underline">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
<!-- AdminLTE JS (optional - only if you need JS functionality) -->
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>