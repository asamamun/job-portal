<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('adminto/assets/images/favicon.ico') }}">

    <!-- App css -->

    <link href="{{ asset('adminto/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="{{ asset('adminto/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="loading authentication-bg authentication-bg-pattern">
    @include('inc.sweetAlert2')
    @yield('content')

    <script src="{{ asset('adminto/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/feather-icons/feather.min.js') }}"></script>
	
	
    <!-- App js -->
    <script src="{{ asset('adminto/assets/js/app.min.js') }}"></script>

</body>

</html>