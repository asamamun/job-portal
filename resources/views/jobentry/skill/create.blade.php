{{-- @extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">skill</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
             <div class="card  col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">skill Details</h4>
                  
                    <form action="{{ route('skill.store') }}" class="parsley-examples" method="POST">
                        @csrf                
                        <div class="mb-3"> 
                            <label for="skill_type_id" class="form-label">Skill_Type<span class="text-danger">*</span></label>
                            <select name="type" required="" id="skill_type_id" class="form-control">
                                <option value="" disabled {{ old('skill_type_id') ? '' : 'selected' }}>Select Skill Type</option>
                                @foreach ($skilltypes as $skilltype)
                                    <option value="{{ $skilltype->id }}" {{ old('skill_type_id') == $skilltype->id ? 'selected' : '' }}>{{ $skilltype->name }}</option>
                                @endforeach
                                
                                <!-- Add other possible values here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="levelname" class="form-label">Level<span class="text-danger">*</span></label>
                            <select name="level" required=""  value="{{old('level')}}" class="form-control" id="levelname">
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                
                                <!-- Add other possible values here -->
                            </select>
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
@endsection --}}
@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Skill</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
            <div class="card col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Skill Add</h4>
                    <form action="{{ route('skill.store') }}" class="parsley-examples" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="skill_type_id" class="form-label">Skill Type<span class="text-danger">*</span></label>
                            <select name="skill_type_id" required id="skill_type_id" class="form-control">
                                <option value="" disabled {{ old('skill_type_id') ? '' : 'selected' }}>Select Skill Type</option>
                                @foreach ($skilltypes as $skilltype)
                                <option value="{{ $skilltype->id }}" {{ old('skill_type_id') == $skilltype->id ? 'selected' : '' }}>{{ $skilltype->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level<span class="text-danger">*</span></label>
                            <select name="level" required id="level" class="form-control">
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                            <button type="button" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection
