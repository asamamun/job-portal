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

        <form action="{{ route('industrial.store') }}" class="parsley-examples" method="POST">
            @csrf
            <div class="mb-3">
                <label for="catName" class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" required="" class="form-control" id="catName">
            </div>
            <div class="mb-3">
                <label for="iconName" class="form-label">Icon<span class="text-danger">*</span></label>
                <input type="text" name="icon" value="{{ old('icon') }}" required="" class="form-control" id="iconName">
            </div>
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                <button type="reset" class="btn btn-danger waves-effect">Reset</button>
                <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection