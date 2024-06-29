@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Create Form</h4>

        <form action="{{ route('carousel.store') }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="header" class="form-label">Header<span class="text-danger">*</span></label>
                <input type="text" name="header" value="{{ old('header') }}" required="" class="form-control" id="header">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" required="" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" name="image" value="{{ old('image') }}" required="" class="form-control" id="image">
            </div>
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection