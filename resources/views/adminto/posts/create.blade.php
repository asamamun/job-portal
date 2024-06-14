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
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
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
</script>
@endsection