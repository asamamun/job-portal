<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    @yield('head')

    <!-- Favicon -->
    <link href="{{ asset('jobentry/img/favicon.ico ')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('jobentry/lib/animate/animate.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('jobentry/lib/owlcarousel/assets/owl.carousel.min.css ')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('jobentry/css/bootstrap.min.css ')}}" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Template Stylesheet -->
    <link href="{{ asset('jobentry/css/style.css ')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        @include('jobentry.inc.navbar')
        @yield('content')
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('jobentry/lib/wow/wow.min.js ')}}"></script>
    <script src="{{ asset('jobentry/lib/easing/easing.min.js ')}}"></script>
    <script src="{{ asset('jobentry/lib/waypoints/waypoints.min.js ')}}"></script>
    <script src="{{ asset('jobentry/lib/owlcarousel/owl.carousel.min.js ')}}"></script>
    <script src="{{ asset('jobentry/js/main.js ')}}"></script>
    @yield('script')
</body>

</html>