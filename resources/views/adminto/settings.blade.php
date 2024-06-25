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

        <form action="{{ route('settings.update', 1) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <fieldset>
                <legend>Meta Settings</legend>
                <div class="mb-3">
                    <label for="iconNameAddresstitle" class="form-label">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{Settings::get()->title}}" class="form-control" id="iconNameAddresstitle">
                </div>
                <div class="mb-3">
                    <label for="iconNameAddrekeywords" class="form-label">Keywords<span class="text-danger">*</span></label>
                    <input type="text" name="keywords" value="{{Settings::get()->keywords}}" class="form-control" id="iconNameAddrekeywords">
                </div>
                <div class="mb-3">
                    <label for="iconNameAddreauthor" class="form-label">Author<span class="text-danger">*</span></label>
                    <input type="text" name="author" value="{{Settings::get()->author}}" class="form-control" id="iconNameAddreauthor">
                </div>
                <div class="mb-3">
                    <label for="citySelectDescription" class="form-label">Description<span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" id="citySelectDescription" rows="5">{{Settings::get()->description}}</textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Files Settings</legend>
                <div class="mb-3">
                    <label for="iconNameAddreiconsstitle" class="form-label">Icon</label>
                    <input type="file" name="icon" value="" class="form-control" id="iconNameAddreiconsstitle">
                </div>
            </fieldset>

            <fieldset>
                <legend>Page Settings</legend>
                <div class="mb-3">
                    <label for="iconNapaginatetle" class="form-label">Paginate</label>
                    <input type="text" name="paginate" value="{{Settings::get()->paginate}}" class="form-control" id="iconNapaginatetle">
                </div>
            </fieldset>

            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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