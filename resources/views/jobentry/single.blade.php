@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection
@section('content')
@include('jobentry.inc.jumbotron', ['title' => $post->title])

<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('storage/'.$post->image)}}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{$post->title}}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$post->address}}</span>
                        <span class="text-truncate me-3"><i class="fas fa-user text-primary me-2"></i>{{$post->employer->name}}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$post->type}}</span>
                        <span class="text-truncate me-3"><i class="fas fa-users text-primary me-2"></i>{{$post->vacancy}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Description</h4>
                    {!!html_entity_decode($post->description)!!}
                    <br />
                    <br />
                    <h4 class="mb-3">Basic Information</h4>
                    <hr />
                    <ul class="list-inline">
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Functional:- {{ $post->functional->name }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Industrial:- {{ $post->industrial->name }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Special:- {{ $post->special->name }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Country:- {{ $post->country->name }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;State:- {{ $post->state->name }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Salary:- {{ $post->salary }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Vacancy:- {{ $post->vacancy }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Published Date:- {{ Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Deadline:- {{ Carbon\Carbon::parse($post->deadline)->format('d M Y') }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Qualification:- {{ $post->qualification }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Contact:- {{ $post->contact }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Email:- {{ $post->email }}</li>
                        <li><i class="fa fa-star text-primary"></i>&nbsp;Website:- <a href="{{$post->website}}" target="_blank">{{$post->website}}</a></li>
                        @if ($post->file)
                            <li><i class="fa fa-star text-primary"></i>&nbsp;File:- <a href="{{asset('storage/'.$post->file)}}">Download</a></li> 
                        @endif
                    </UL>
                </div>

                <div class="">
                    <a href="{{url('applicant/apply/'.$post->id)}}" class="btn btn-primary">Apply Now</a>
                    <a href="{{route('post.save', $post->id)}}" class="btn btn-primary">Save</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" id="functionalSidebar" data-wow-delay="0.1s">
                    <h4 class="mb-4">Functional</h4>
                </div>
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" id="industrialSidebar" data-wow-delay="0.1s">
                    <h4 class="mb-4">Industrial</h4>
                </div>
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" id="specialSidebar" data-wow-delay="0.1s">
                    <h4 class="mb-4">Special</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
@include('jobentry.inc.footer')
@endsection
