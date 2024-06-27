@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Edit Skill</h4>
        
        <form action="{{ route('skill_type.update', $skill_type->id) }}" class="parsley-examples" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="catName" class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" name="name" required="" value="{{ $skill_type->name }}" class="form-control" id="catName">
            </div>
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection