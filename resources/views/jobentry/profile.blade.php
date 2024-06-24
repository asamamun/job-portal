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
            <div class="col-md-9">
                {{-- <form action="{{ route('applicant.update.image') }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <legend>Profile Image:</legend>
                        <div class="mb-3">
                            <label for="userNameImage" class="form-label">Upload Image<span class="text-danger">*</span></label>
                            <input type="file" name="image" parsley-trigger="change" required="" class="form-control" id="userNameImage">
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add Image</button>
                        </div>
                    </fieldset>
                </form> --}}
                <form action="#" class="parsley-examples" novalidate="">
                    <fieldset>
                        <legend>Personel Details:</legend>


                            
                            <div class="mb-3">
                                <label for="fathername" class="form-label">Father Name<span class="text-danger">*</span></label>
                                <input type="text" name="fathername" required="" value="{{ old('father') }}" class="form-control" id="fathername">
                            </div>
                            <div class="mb-3">
                                <label for="mothername" class="form-label"> Mother Name<span class="text-danger">*</span></label>
                                <input type="text" name="mother" required="" value="{{ old('mother') }}" class="form-control" id="mothername">
                            </div>
                       
                        <div class="mb-3">
                            <label for="dobdate" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" name="dob" required="" value="{{ old('dob') }}" class="form-control" id="dobdate">
                        </div>
                        <label for="gendername" class="form-label">Gender<span class="text-danger">*</span></label>
                        <select name="gendername" required=""  value="{{ old('gender') }}" class="form-control" id="gendername">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">others</option>
                            <!-- Add other possible values here -->
                        </select>
                        <div class="mb-3">
                            <label for="nidnum" class="form-label">NID No<span class="text-danger">*</span></label>
                            <input type="number" name="nidnum" required="" value="{{ old('nid') }}" class="form-control" id="nidnum">
                        </div>

                        <div class="mb-3">
                            <label for="religionname" class="form-label">Religion<span class="text-danger">*</span></label>
                            <input type="text" name="religion" required="" value="{{ old('religion') }}" class="form-control" id="religionname">
                        </div>
                       
                            <label for="maritalstatus" class="form-label">Marital Status<span class="text-danger">*</span></label>
                            <select name="maritalstatus" required=""  value="{{ old('marital') }}" class="form-control" id="maritalstatus">
                                <option value="single">single</option>
                                <option value="married">married</option>
                                <option value="others">others</option>
                                <!-- Add other possible values here -->
                            </select>
                        <div class="mb-3">
                            <label for="nationalityname" class="form-label">Nationality<span class="text-danger">*</span></label>
                            <input type="text" name="nationality" required="" value="{{ old('nationality') }}" class="form-control" id="nationalityname">
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
              
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection