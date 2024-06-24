@extends('jobentry.layout', ['title' => 'Job Entry'])

@section('head')
@endsection

@section('content')
    @include('jobentry.inc.jumbotron')

    <div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Edit Skill</h1>
            <div class="row g-5">
                @include('jobentry.inc.leftsidebar')
                <div class="card col-9">
                    <div class="card-body">
                        <form action="{{ route('skill.update', $skill->id) }}" class="parsley-examples" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mt-0 header-title">Skill Information</h4>
                                <a href="{{ route('skill.index') }}" class="btn btn-light">
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                            <div class="mb-3">
                                <label for="skill_type_id" class="form-label">Skill Type<span class="text-danger">*</span></label>
                                <select name="skill_type_id" required id="skill_type_id" class="form-control">
                                    <option value="" disabled {{ old('skill_type_id') ? '' : 'selected' }}>Select Skill Type</option>
                                    @foreach ($skilltypes as $skilltype)
                                        <option value="{{ $skilltype->id }}" {{ $skilltype->id == $skill->skill_type_id ? 'selected' : '' }}>{{ $skilltype->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Level<span class="text-danger">*</span></label>
                                <select name="level" required id="level" class="form-control">
                                    <option value="beginner" {{ $skill->level == 'beginner' ? 'selected' : '' }}>Beginner</option>
                                    <option value="intermediate" {{ $skill->level == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                    <option value="advanced" {{ $skill->level == 'advanced' ? 'selected' : '' }}>Advanced</option>
                                </select>
                            </div>

                            <div class="text-end">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                                <a href="{{ route('skill.index') }}" class="btn btn-secondary waves-effect">Cancel</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('jobentry.inc.footer')
@endsection
