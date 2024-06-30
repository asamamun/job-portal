@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Reference</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
             <div class="card  col-9">
                <div class="card-body">
        
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title">Reference Details</h4>
                        <a href="{{ route('reference.index') }}" class="btn btn-light">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('reference.store') }}" class="parsley-examples" method="POST">
                        @csrf
                        <div class="mb-3">                 
                            <label for="refname" class="form-label">Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" required="" value="{{ old('name') }}" class="form-control" id="refname">
                        </div>
                        <div class="mb-3">
                            <label for="reforganization" class="form-label">Organization<span class="text-danger">*</span></label>
                            <input type="text" name="organization" required="" value="{{ old('organization') }}" class="form-control" id="reforganization">
                        </div>
                        <div class="mb-3">

                         <label for="refdesignation" class="form-label">Designation<span class="text-danger">*</span></label>
                            <input type="text" name="designation" required="" value="{{ old('designation') }}" class="form-control" id="refdesignation">
                        </div>
                        <div class="mb-3">
                            <label for="refphone" class="form-label">Phone<span class="text-danger">*</span></label>
                            <input type="text" name="phone" required="" value="{{ old('phone') }}" class="form-control" id="refphone">
                        </div>
                        <div class="mb-3">
                            <label for="refrelation" class="form-label">Relation<span class="text-danger">*</span></label>
                            <input type="text" name="relation" required="" value="{{ old('relation') }}" class="form-control" id="refrelation">
                        </div>
                        <div class="mb-3">
                            <label for="refemail" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" required="" value="{{ old('email') }}" class="form-control" id="refemail">
                        </div>
                        <div class="mb-3">
                            <label for="refaddress" class="form-label">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" required="" value="{{ old('address') }}" class="form-control" id="refaddress">
                        </div>
                       
                     

                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection