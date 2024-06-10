@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Basic Form</h4>
        <p class="text-muted font-14">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

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
@endsection

@section('script')

@endsection