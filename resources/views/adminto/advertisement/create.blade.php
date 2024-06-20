@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Create Form</h4>
        <p class="text-muted font-14">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>

        <form action="{{ route('advertisement.store') }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" value="{{ old('title') }}" required="" class="form-control" id="catName">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File<span class="text-danger">*</span></label>
                <input type="file" name="file" value="{{ old('file') }}" required="" class="form-control" id="iconName">
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