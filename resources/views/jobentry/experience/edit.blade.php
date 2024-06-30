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
            <div class="card  col-9">
                <div class="card-body">
           
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title">Experience Edit</h4>
                        <a href="{{ route('experience.index') }}" class="btn btn-light">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('experience.update', $experience->id) }}" class="parsley-examples" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="comname" class="form-label">Company<span class="text-danger">*</span></label>
                            <input type="text" name="company" required="" value="{{ $experience->company }}" class="form-control" id="comname">
                        </div>
                        <div class="mb-3">
                            <label for="comaddress" class="form-label">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" required="" value="{{ $experience->address }}" class="form-control" id="comaddress">
                        </div>
                        <div class="mb-3">
                            <label for="comphone" class="form-label">Phone<span class="text-danger">*</span></label>
                            <input type="integer" name="phone" required="" value="{{ $experience->phone }}" class="form-control" id="comphone">
                        </div>
                        <div class="mb-3">
                            <label for="composition" class="form-label">Position<span class="text-danger">*</span></label>
                            <input type="text" name="position" required="" value="{{ $experience->position }}" class="form-control" id="composition">
                        </div>
                        <div class="mb-3">
                            <label for="comdepartment" class="form-label">Department<span class="text-danger">*</span></label>
                            <input type="text" name="department" required="" value="{{ $experience->department }}" class="form-control" id="comdepartment">
                        </div>
                        <div class="mb-3">
                            <label for="comdescription" class="form-label">Description<span class="text-danger">*</span></label>
                            <textarea name="description" required="" class="form-control" id="comdescription">{{ $experience->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="comfrom" class="form-label">From<span class="text-danger">*</span></label>
                            <input type="date" name="from" required="" value="{{ $experience->from }}" class="form-control" id="comfrom">
                        </div>
                        <div class="mb-3">
                            <label for="comto" class="form-label">To<span class="text-danger">*</span></label>
                            <input type="date" name="to" value="{{ $experience->to }}" class="form-control" id="comto">
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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