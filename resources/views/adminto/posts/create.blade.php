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
        <hr class="mb-4">

        <form action="{{ route('posts.store') }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <legend>Job Post</legend>
                <div class="mb-3">
                    <label for="iconNameAddresstitle" class="form-label">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" required="" class="form-control" id="iconNameAddresstitle">
                </div>
                <div class="mb-3">
                    <label for="citySelectDescription" class="form-label">Description<span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" id="citySelectDescription" rows="5">{{ old('description') }}</textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Category</legend>
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
            </fieldset>

            <fieldset>
                <legend>Basic Information</legend>
                <div class="mb-3">
                    <label for="iconNameerwe" class="form-label">Job Type</label>
                    <select name="type" class="form-select" required id="iconNameerwe">
                        <option value="">Select Job Type</option>
                        <option value="full-time">Full-Time</option>
                        <option value="part-time">Part-Time</option>
                        <option value="internship">Internship</option>
                        <option value="contract">Contract</option>
                        <option value="freelance">Freelance</option>
                        <option value="other">Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Salary" class="form-label">Salary</label>
                    <input type="number" name="salary" value="{{ old('salary') }}" class="form-control" id="Salary" min="0">
                </div>
                <div class="mb-3">
                    <label for="Experience" class="form-label">Experience</label>
                    <input type="number" name="experience" value="{{ old('experience') }}" class="form-control" id="Experience" min="0">
                </div>
                <div class="mb-3">
                    <label for="qualification" class="form-label">Qualification</label>
                    <input type="text" name="qualification" value="{{ old('qualification') }}" class="form-control" id="qualification">
                </div>
                <div class="mb-3">
                    <label for="qualificationvacancy" class="form-label">Vacancy<span class="text-danger">*</span></label>
                    <input type="text" name="vacancy" value="{{ old('vacancy') }}" class="form-control" id="qualificationvacancy">
                </div>
            </fieldset>

            <fieldset>
                <legend>Location</legend>
                <div class="mb-3">
                    <label for="CountrySelect" class="form-label">Country</label>
                    <select name="country_id" class="form-select" required id="CountrySelect">
                        <option value="">Select Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="stateSelect" class="form-label">State</label>
                    <select name="state_id" class="form-select" id="stateSelect"></select>
                </div>
                <div class="mb-3">
                    <label for="iconNameAddress" class="form-label">Address<span class="text-danger">*</span></label>
                    <input type="text" name="address" value="{{ old('address') }}" required="" class="form-control" id="iconNameAddress">
                </div>
            </fieldset>

            <fieldset>
                <legend>Comunication</legend>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact<span class="text-danger">*</span></label>
                    <input type="text" name="contact" value="{{ old('contact') }}" required="" class="form-control" id="contact">
                </div>
                <div class="mb-3">
                    <label for="iconNameEmail" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required="" class="form-control" id="iconNameEmail">
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" name="website" value="{{ old('website') }}" required="" class="form-control" id="website">
                </div>
            </fieldset>

            <fieldset>
                <legend>Files</legend>
                <div class="mb-3">
                    <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" id="image">
                    <span>jpg,jpeg,png</span>
                </div>
                <div class="mb-3">
                    <label for="filessdsfa" class="form-label">File</label>
                    <input type="file" name="file" class="form-control" id="filessdsfa">
                    <span>pdf, doc, docx, zip</span>
                </div>
            </fieldset>

            <fieldset>
                <legend>Date</legend>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline<span class="text-danger">*</span></label>
                    <input type="date" name="deadline" value="{{ old('deadline') }}" required="" class="form-control" id="deadline">
                </div>
                <div class="mb-3">
                    <label for="expires" class="form-label">Expires<span class="text-danger">*</span></label>
                    <input type="date" name="expires" value="{{ old('expires') }}" required="" class="form-control" id="expires">
                </div>
            </fieldset>

            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    function editor(id) {
        CKEDITOR.replace(id, {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    }
    editor('citySelectDescription');
</script>
@endsection