@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Update Form</h4>
        

        <form action="{{ route('advertisement.update', $advertisement->id) }}" class="parsley-examples" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="catName" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" name="title" required="" value="{{ $advertisement->title }}" class="form-control" id="catName">
            </div>
            <div class="mb-3">
                <label for="iconName" class="form-label">File<span class="text-danger">*</span></label>
                <input type="file" name="file" required="" value="{{ $advertisement->file }}" class="form-control" id="iconName">
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