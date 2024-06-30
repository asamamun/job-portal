@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Education</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
             <div class="card  col-9">
                <div class="card-body">
 
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title">Education Details</h4>
                        <a href="{{ route('education.index') }}" class="btn btn-light">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('education.store') }}" class="parsley-examples" method="POST">
                        @csrf
                        <label for="levelname" class="form-label">Level<span class="text-danger">*</span></label>
                        <select name="level" required=""  value="{{ old('level') }}" class="form-control" id="levelname">
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="higher secondary">Higher Secondary</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="phd">PhD</option>
                            <option value="other">Other</option>
                            <!-- Add other possible values here -->
                        </select>
                        <div class="mb-3">
                            <label for="institutename" class="form-label">Institute<span class="text-danger">*</span></label>
                            <input type="text" name="institute" required="" value="{{ old('institute') }}" class="form-control" id="institutename">
                        </div>
                        <div class="mb-3">
                            <label for="boardname" class="form-label">Board<span class="text-danger">*</span></label>
                            <input type="text" name="board" required="" value="{{ old('board') }}" class="form-control" id="boardname">
                        </div>
                        <div class="mb-3">
                            <label for="durationtime" class="form-label">Duration<span class="text-danger">*</span></label>
                            <input type="float" name="duration" required="" value="{{ old('duration') }}" class="form-control" id="durationtime">
                        </div>
                        <div class="mb-3">
                            <label for="sessiontime" class="form-label">Session<span class="text-danger">*</span></label>
                            <input type="integer" name="session" required="" value="{{ old('session') }}" class="form-control" id="sessiontime">
                        </div>
                        <div class="mb-3">
                            <label for="subjectname" class="form-label">Subject<span class="text-danger">*</span></label>
                            <input type="text" name="subject" required="" value="{{ old('subject') }}" class="form-control" id="subjectname">
                        </div>
                        <div class="mb-3">
                            <label for="groupname" class="form-label">Group<span class="text-danger">*</span></label>
                            <input type="text" name="group" required="" value="{{ old('group') }}" class="form-control" id="groupname">
                        </div>
                        <div class="mb-3">
                            <label for="divisionname" class="form-label">Division<span class="text-danger">*</span></label>
                            <input type="text" name="division" required="" value="{{ old('division') }}" class="form-control" id="divisionname">
                        </div>
                        <div class="mb-3">
                            <label for="grademarks" class="form-label">Grade<span class="text-danger">*</span></label>
                            <input type="float" name="grade" required="" value="{{ old('grade') }}" class="form-control" id="grademarks">
                        </div>
                        <div class="mb-3">
                            <label for="gradeoutofmarks" class="form-label">Grade Out Of<span class="text-danger">*</span></label>
                            <input type="float" name="grade_out_of" required="" value="{{ old('grade_out_of') }}" class="form-control" id="gradeoutofmarks">
                        </div>
                        <div class="mb-3">
                            <label for="passingyeardate" class="form-label">Passing Year<span class="text-danger">*</span></label>
                            <input type="integer" name="passing_year" required="" value="{{ old('passing_year') }}" class="form-control" id="passingyeardate">
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