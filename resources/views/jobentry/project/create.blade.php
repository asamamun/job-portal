@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">project</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar')
             <div class="card  col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">project Details</h4>
                  
                    <form action="{{ route('project.store') }}" class="parsley-examples" method="POST">
                        @csrf
                        <div class="mb-3">                 
                            <label for="protitle" class="form-label">title<span class="text-danger">*</span></label>
                            <input type="text" name="title" required="" value="{{old('title')}}" class="form-control" id="protitle">
                        </div>
                        <div class="mb-3">
                            <label for="prodescription" class="form-label">description<span class="text-danger">*</span></label>
                            <input type="text" name="description" required="" value="{{old('description')}}" class="form-control" id="prodescription">
                        </div>
                        <div class="mb-3">
                            <label for="prourl" class="form-label">url<span class="text-danger">*</span></label>
                            <input type="text" name="url" required="" value="{{ old('url')}}" class="form-control" id="prourl">
                        </div>
                        <div class="mb-3">
                            <label for="prostartdate" class="form-label">start_date<span class="text-danger">*</span></label>
                            <input type="date" name="start_date" required="" value="{{ old('start_date') }}" class="form-control" id="prostartdate">
                        </div>
                        <div class="mb-3">
                            <label for="proenddate" class="form-label">end_date<span class="text-danger">*</span></label>
                            <input type="date" name="end_date" required="" value="{{ old('end_date')}}" class="form-control" id="proenddate">
                        </div>
                      
                            <label for="prostatus" class="form-label">status<span class="text-danger">*</span></label>
                            <select name="status" required=""  value="{{ old('status')}}" class="form-control" id="prostatus">
                                <option value="complete">complete</option>
                                <option value="continue">continue</option>
                                <option value="upcoming">upcoming</option>
                                <option value="cancelled">cancelled</option>
                                <!-- Add other possible values here -->
                            </select>
                

                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
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