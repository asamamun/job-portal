@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')
    
@endsection

@section('content')
<div class="row mt-3">
            <div class="col-2">
                <div class="container bg-warning bg-gradient p-0">

                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                Home
                            </button>
                            <div class="collapse show" id="home-collapse">
                                <ul class="nav-second-level">
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li><a href="#">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="nav-second-level">
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li><a href="#">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="nav-second-level">
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li><a href="#">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="nav-second-level">
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Updates</a></li>
                                    <li><a href="#">Reports</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-9 bg-light">

                <div>
                    <form action="#" class="parsley-examples" novalidate="">
                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name<span class="text-danger">*</span></label>
                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control" id="emailAddress">
                        </div>
                        <div class="mb-3">
                            <label for="pass1" class="form-label">Password<span class="text-danger">*</span></label>
                            <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="passWord2" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control" id="passWord2">
                        </div>
                        <div class="mb-3">
                            <div class="form-check ">
                                <input id="checkbox6a" type="checkbox" class="form-check-input" data-parsley-multiple="checkbox6a">
                                <label for="checkbox6a" class="form-check-label">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
@endsection
