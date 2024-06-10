@extends('adminto.layout.auth', ['title' => 'Job Entry', 'name' => 'dashboard'])

@section('content')
<div class="account-pages my-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">
                    <a href="index.html">
                        <img src="{{ asset('adminto/assets/images/logo-dark.png') }}" alt="" height="22" class="mx-auto">
                    </a>
                    <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>

                </div>
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Sign In</h4>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" name="email" :value="old('email')" type="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" autocomplete="current-password" required="" id="password" placeholder="Enter your password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="mb-3">
                                <div class="form-check">
                                    <input name="remember" type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                            <div class="mb-3 d-grid text-center">
                                <button class="btn btn-primary" type="submit" name="login" value="login"> Log In </button>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="pages-recoverpw.html" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                        <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@endsection