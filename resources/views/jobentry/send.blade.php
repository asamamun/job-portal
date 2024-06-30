@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Send Your CV Link Via Email</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
             <div class="card col-9">
                <div class="card-body">
        
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-4 header-title">Email Link</h4>
                        <a href="javascript:void(0)" class="btn btn-light mt-4" onclick="window.history.back();">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('send.cv') }}" class="parsley-examples" method="POST">
                        @csrf
                        <div class="mb-3">                 
                            <label for="emailnamesubject" class="form-label">Subject<span class="text-danger">*</span></label>
                            <input type="text" name="subject" required="" value="{{ old('subject') }}" class="form-control" id="emailnamesubject">
                        </div>
                        <div class="mb-3">                 
                            <label for="emailname" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" required="" value="{{ old('email') }}" class="form-control" id="emailname">
                        </div>
                        <div class="mb-3">                 
                            <label for="emailinklname" class="form-label">CV Link</label>
                            <input type="text" name="cvlink" value="{{ $cvlink }}" class="form-control" id="emailinklname" readonly>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection