@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Update Form</h4>
        

        <form action="{{ route('carousel.update', $carousel->id) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="header" class="form-label">Header<span class="text-danger">*</span></label>
                <input type="text" name="header" required="" value="{{ $carousel->header }}" class="form-control" id="header">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" required="" value="{{ $carousel->title }}" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" name="image" value="{{ $carousel->image }}" class="form-control" id="image">
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