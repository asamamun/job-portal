@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">profile</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card  col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Profile Edit</h4>
                    <form action="{{ route('applicant.profile.update') }}" class="parsley-examples" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" value="{{auth()->user()->applicant->title}}" class="form-control" id="title">
                            </div>
                        <div class="mb-3">
                                <label for="objective" class="form-label">objective<span class="text-danger">*</span></label>
                                <textarea name="objective" class="form-control" value="{{auth()->user()->applicant->objective}}" id="" cols="30" rows="10"></textarea>
                            </div>
                        <div class="mb-3">
                                <label for="fathername" class="form-label">Father Name<span class="text-danger">*</span></label>
                                <input type="text" name="father" value="{{auth()->user()->applicant->father}}" class="form-control" id="fathername">
                            </div>
                            <div class="mb-3">
                                <label for="mothername" class="form-label"> Mother Name<span class="text-danger">*</span></label>
                                <input type="text" name="mother" value="{{auth()->user()->applicant->mother}}" class="form-control" id="mothername">
                            </div>
                            <div class="mb-3">
                                <label for="nidnumber" class="form-label"> Nid Number<span class="text-danger">*</span></label>
                                <input type="text" name="nid" value="{{auth()->user()->applicant->nid}}" class="form-control" id="nidnumber">
                            </div>

                            <div class="mb-3">
                                <label for="jobtype" class="form-label">Job Type<span class="text-danger">*</span></label>
                                <input type="text" name="jobtype" value="{{auth()->user()->applicant->jobtype}}" class="form-control" id="jobtype">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location<span class="text-danger">*</span></label>
                                <input type="text" name="location" value="{{auth()->user()->applicant->location}}" class="form-control" id="location">
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Dob<span class="text-danger">*</span></label>
                                <input type="date" name="dob" value="{{auth()->user()->applicant->dob}}" class="form-control" id="dob">    
                            </div>    
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender<span class="text-danger">*</span></label>
                                <select name="gender"  value="{{auth()->user()->applicant->gender}}" class="form-control" id="gender">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="others">others</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion<span class="text-danger">*</span></label>
                                <input type="text" name="religion" value="{{auth()->user()->applicant->religion}}" class="form-control" id="religion">
                            </div>
                            <div class="mb-3">
                                <label for="nationality" class="form-label">Nationality<span class="text-danger">*</span></label>
                                <input type="text" name="nationality" value="{{auth()->user()->applicant->nationality}}" class="form-control" id="nationality">
                            </div>
                           <div class="mb-3">
                                <label for="marital" class="form-label">Marital Status<span class="text-danger">*</span></label>
                                <select name="marital"  value="{{auth()->user()->applicant->marital}}" class="form-control" id="marital">
                                    <option value="single">single</option>
                                    <option value="married">married</option>
                                    <option value="others">others</option>
                                </select>
                            </div>  
                            <div class="mb-3">
                                <label for="type" class="form-label">Type<span class="text-danger">*</span></label>
                                <select name="type"  value="{{auth()->user()->applicant->type}}" class="form-control" id="type">
                                    <option value="0">Regular</option>
                                    <option value="1">Professional</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="availablefor" class="form-label">Available For<span class="text-danger">*</span></label>
                            <select name="available_for"   value="{{auth()->user()->applicant->available_for}}" class="form-control" id="availablefor">
                                <option value="part-time">Part Time</option>
                                <option value="full-time">Full Time</option>
                                <option value="both">Both</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="points" class="form-label">Points<span class="text-danger">*</span></label>
                                <input type="text" name="points" value="{{auth()->user()->applicant->points}}" class="form-control" id="points">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                                <select name="status"  value="{{auth()->user()->applicant->status}}" class="form-control" id="status">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
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