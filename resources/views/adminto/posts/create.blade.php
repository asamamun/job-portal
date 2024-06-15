@extends('adminto.layout.employer', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Create A Job Post</h4>
        <p class="text-muted font-14">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <form action="{{ route('functional.store') }}" class="parsley-examples" method="POST">
            @csrf
            <div class="mb-3">
                <label for="catNametitle" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" required="" class="form-control" id="catNametitle">
            </div>
            <div class="mb-3">
                <label for="iconNamedfsdfs" class="form-label">Functional Category<span class="text-danger">*</span></label>
                <select name="functional_id" class="form-select" required id="iconNamedfsdfs">
                    <option value="">Select Functional Category</option>
                    @foreach ($functionals as $functional)
                    <option value="{{ $functional->id }}">{{ $functional->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="iconName23423" class="form-label">Industrial Category<span class="text-danger">*</span></label>
                <select name="industrial_id" class="form-select" required id="iconName23423">
                    <option value="">Select Industrial Category</option>
                    @foreach ($industrials as $industrial)
                    <option value="{{ $industrial->id }}">{{ $industrial->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="iconNamewewe" class="form-label">Special Category<span class="text-danger">*</span></label>
                <select name="special_id" class="form-select" required id="iconNamewewe">
                    <option value="">Select Special Category</option>
                    @foreach ($specials as $special)
                    <option value="{{ $special->id }}">{{ $special->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="iconNameerwe" class="form-label">Job Type<span class="text-danger">*</span></label>
                <select name="jobtype_id" class="form-select" required id="iconNameerwe">
                    <option value="">Select Job Type</option>
                    <option value="full-time">Full-Time</option>
                    <option value="part-time">Part-Time</option>
                    <option value="internship">Internship</option>
                    <option value="contract">Contract</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="CountrySelect" class="form-label">Country<span class="text-danger">*</span></label>
                <select name="country_id" class="form-select" required id="CountrySelect">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="stateSelect" class="form-label">State<span class="text-danger">*</span></label>
                <select name="state_id" class="form-select" required id="stateSelect"></select>
            </div>
            <div class="mb-3">
                <label for="citySelectDescription" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea name="description" class="form-control" id="citySelectDescription" rows="5">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="iconNameAddress" class="form-label">Address<span class="text-danger">*</span></label>
                <input type="text" name="address" value="{{ old('address') }}" required="" class="form-control" id="iconNameAddress">
            </div>
            <div class="mb-3">
                <label for="Salary" class="form-label">Salary<span class="text-danger">*</span></label>
                <input type="number" name="salary" value="{{ old('salary') }}" required="" class="form-control" id="Salary" min="0">
            </div>
            <div class="mb-3">
                <label for="Experience" class="form-label">Experience<span class="text-danger">*</span></label>
                <input type="number" name="experience" value="{{ old('experience') }}" required="" class="form-control" id="Experience" min="0">
            </div>
            <div class="mb-3">
                <label for="qualification" class="form-label">Qualification<span class="text-danger">*</span></label>
                <input type="text" name="qualification" value="{{ old('qualification') }}" required="" class="form-control" id="qualification">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact<span class="text-danger">*</span></label>
                <input type="text" name="contact" value="{{ old('contact') }}" required="" class="form-control" id="contact">
            </div>
            <div class="mb-3">
                <label for="iconNameEmail" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" required="" class="form-control" id="iconNameEmail">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website<span class="text-danger">*</span></label>
                <input type="text" name="website" value="{{ old('website') }}" required="" class="form-control" id="website">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" name="image" class="form-control" id="image">
                <span>jpg,jpeg,png</span>
            </div>
            <div class="mb-3">
                <label for="filessdsfa" class="form-label">File<span class="text-danger">*</span></label>
                <input type="file" name="file" class="form-control" id="filessdsfa">
                <span>pdf, doc, docx, zip</span>
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline<span class="text-danger">*</span></label>
                <input type="date" name="deadline" value="{{ old('deadline') }}" required="" class="form-control" id="deadline">
            </div>
            <div class="mb-3">
                <label for="expires" class="form-label">Expires<span class="text-danger">*</span></label>
                <input type="date" name="expires" value="{{ old('expires') }}" required="" class="form-control" id="expires">
            </div>
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <h4 class="header-title mb-3"> Wizard With Form Validation</h4>

        <div id="rootwizard">
            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                <li class="nav-item" data-target-form="#accountForm">
                    <a href="#first" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span class="d-none d-sm-inline">Account</span>
                    </a>
                </li>
                <li class="nav-item" data-target-form="#profileForm">
                    <a href="#second" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-face-profile me-1"></i>
                        <span class="d-none d-sm-inline">Profile</span>
                    </a>
                </li>
                <li class="nav-item" data-target-form="#otherForm">
                    <a href="#third" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                        <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                        <span class="d-none d-sm-inline">Finish</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content mb-0 b-0 pt-0">

                <div class="tab-pane" id="first">
                    <form id="accountForm" method="post" action="#" class="form-horizontal">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="userName3">User name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="userName3" name="userName3" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="password3"> Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="password3" name="password3" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="confirm3" name="confirm3" class="form-control" required>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </form>
                </div>

                <div class="tab-pane fade" id="second">
                    <form id="profileForm" method="post" action="#" class="form-horizontal">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="name3"> First name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="name3" name="name3" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="surname3"> Last name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="surname3" name="surname3" class="form-control" required>
                                    </div>
                                </div>
                    
                                <div class="row mb-3">
                                    <label class="col-md-3 col-form-label" for="email3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email3" name="email3" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </form>
                </div>

                <div class="tab-pane fade" id="third">
                    <form id="otherForm" method="post" action="#" class="form-horizontal">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h2 class="mt-0">
                                        <i class="mdi mdi-check-all"></i>
                                    </h2>
                                    <h3 class="mt-0">Thank you !</h3>
                    
                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                        dui. Aliquam mattis dictum aliquet.</p>
                    
                                    <div class="mb-3">
                                        <div class="form-check d-inline-block">
                                            <input type="checkbox" class="form-check-input" id="customCheck4" required>
                                            <label class="form-check-label" for="customCheck4">I agree with the Terms and Conditions</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </form>
                </div>

                <ul class="list-inline wizard mb-0">
                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                    </li>
                    <li class="next list-inline-item float-end"><a href="javascript: void(0);" class="btn btn-secondary">Next</a></li>
                </ul>

            </div> <!-- tab-content -->
        </div> <!-- end #rootwizard-->

    </div> <!-- end card-body -->
</div> <!-- end card-->
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('adminto/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('adminto/assets/js/pages/form-wizard.init.js') }}"></script>
<script>
$('#CountrySelect').on('change', function() {
    var country_id = $(this).val();
    if (country_id) {
        $.ajax({
            type: "GET",
            url: "{{url('ajax/state')}}/" + country_id,
            success: function(res) {
                $('#stateSelect').html(res);
            }
        });
    } else {
        $("#stateSelect").empty();
    }
});
function editor(id){
	CKEDITOR.replace(id, {
		filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
}
editor('citySelectDescription');
</script>
@endsection