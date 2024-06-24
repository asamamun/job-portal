@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Language</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card  col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Language Edit</h4>
               
                    <form action="{{ route('language.update', $language->id) }}" class="parsley-examples" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">                 
                            <label for="Lanname" class="form-label">name<span class="text-danger">*</span></label>
                            <input type="text" name="name" required="" value="{{$language->name}}" class="form-control" id="Lanname">
                        </div>                                      
                            <label for="lanlevel" class="form-label">level<span class="text-danger">*</span></label>
                            <select name="level" required=""  value="{{ $language->level }}" class="form-control" id="lanlevel">
                                <option value="beginner">beginner</option>
                                <option value="intermediate">intermediate</option>
                                <option value="advanced">advanced</option>
                                <!-- Add other possible values here -->
                            </select>
                            <label for="lantype" class="form-label">type<span class="text-danger">*</span></label>
                            <select name="type" required=""  value="{{ $language->type }}" class="form-control" id="lantype">
                                <option value="read">read</option>
                                <option value="write">write</option>
                                <option value="speak">speak</option>                          
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