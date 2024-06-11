@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Profile</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
            <div class="col-9">
                <form action="#" class="parsley-examples" novalidate="">
                    <fieldset>
                        <legend>Personel Details:</legend>
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
                    </fieldset>
                </form>
                <table class="table mt-5">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection