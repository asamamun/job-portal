@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection
@section('content')
@include('jobentry.inc.jumbotron')

<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('storage/'.$post->image)}}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{$post->title}}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$post->location}}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$post->type}}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$post->qualification}}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$post->salary}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>{{$post->description}}</p>
                    <h4 class="mb-3">Responsibility</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    {!!html_entity_decode($post->description)!!}
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