@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Project</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card  col-9">
                <div class="card-body">
               
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title">Project Edit</h4>
                        <a href="{{ route('project.index') }}" class="btn btn-light">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                    <form action="{{ route('project.update', $project->id) }}" class="parsley-examples" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">                 
                            <label for="protitle" class="form-label">title<span class="text-danger">*</span></label>
                            <input type="text" name="title" required="" value="{{$project->title}}" class="form-control" id="protitle">
                        </div>
                        <div class="mb-3">
                            <label for="prodescription" class="form-label">description<span class="text-danger">*</span></label>
                            <input type="text" name="description" required="" value="{{$project->description}}" class="form-control" id="prodescription">
                        </div>
                        <div class="mb-3">
                            <label for="prourl" class="form-label">url<span class="text-danger">*</span></label>
                            <input type="text" name="url" required="" value="{{ $project->url}}" class="form-control" id="prourl">
                        </div>
                        <div class="mb-3">
                            <label for="prostartdate" class="form-label">start_date<span class="text-danger">*</span></label>
                            <input type="date" name="start_date" required="" value="{{ $project->start_date }}" class="form-control" id="prostartdate">
                        </div>
                        <div class="mb-3">
                            <label for="proenddate" class="form-label">end_date<span class="text-danger">*</span></label>
                            <input type="date" name="end_date" required="" value="{{ $project->end_date}}" class="form-control" id="proenddate">
                        </div>
                  
                            <label for="prostatus" class="form-label">status<span class="text-danger">*</span></label>
                            <select name="status" required=""  value="{{ $project->status }}" class="form-control" id="prostatus">
                                <option value="complete">complete</option>
                                <option value="continue">continue</option>
                                <option value="upcoming">upcoming</option>
                                <option value="cancelled">cancelled</option>
                                <!-- Add other possible values here -->
                            </select>
                      
                       
                        

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