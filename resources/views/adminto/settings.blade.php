@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
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

        <form action="" class="parsley-examples" method="POST" enctype="multipart/form-data">
            {{Settings::title()}}
            @csrf
            @method('PUT')
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
<script>
    function editor(id) {
        CKEDITOR.replace(id, {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    }
    editor('citySelectDescription');
</script>
@endsection