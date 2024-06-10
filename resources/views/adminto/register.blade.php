@extends('adminto.layout.auth', ['title' => 'Job Entry', 'name' => 'dashboard'])

@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">
                    <a href="index.html">
                        <img src="{{ asset('adminto') }}/assets/images/logo-dark.png" alt="" height="22" class="mx-auto">
                    </a>
                    <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Register</h4>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="roles" class="form-label">Type</label>
                                <select id="roles" name="roles" class="form-control">
                                    <option value="">Select</option>
                                    <option value="employer">Employer</option>
                                    <option value="applicant">Applicant</option>
                                </select>
                                <x-input-error :messages="$errors->get('roles')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="name"  class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" :value="old('name')" id="name" placeholder="Enter your name" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email" :value="old('email')" required placeholder="Enter your email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password_confirmation" required id="password" placeholder="Enter your password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                    <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="mb-3 text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Sign Up </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="pages-login.html" class="text-dark ms-1"><b>Sign In</b></a></p>
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