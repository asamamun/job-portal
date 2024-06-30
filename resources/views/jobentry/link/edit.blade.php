@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Link</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card  col-9">
                <div class="card-body">
              
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title">Link Edit</h4>
                        <a href="{{ route('link.index') }}" class="btn btn-light">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('link.update', $link->id) }}" class="parsley-examples" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">                 
                            <label for="linktitle" class="form-label">title<span class="text-danger">*</span></label>
                            <input type="text" name="title" required="" value="{{$link->title}}" class="form-control" id="linktitle">
                        </div>
                        <div class="mb-3">
                            <label for="linkurl" class="form-label">url<span class="text-danger">*</span></label>
                            <input type="text" name="url" required="" value="{{ $link->url}}" class="form-control" id="linkurl">
                        </div>                      
                   <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
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
@endsection