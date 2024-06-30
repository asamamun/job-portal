@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection
@section('content')
@include('jobentry.inc.jumbotron')

<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
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
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="" style="height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title" style="height: 50px;">{{ Str::limit($post->title, 50) }}</h5>
                                <p class="card-text" style="height: 100px;">{{ Str::limit(preg_replace("/&#?[a-z0-9]+;/i", "", strip_tags($post->description)), 100) }}</p>
                                <a href="{{route('post.single', $post->id)}}" class="btn btn-primary">View Details</a>
                                <a href="{{url('applicant/apply/'.$post->id)}}" class="btn btn-primary">Apply Now</a>
                                <a href="{{route('post.save', $post->id)}}" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
@include('jobentry.inc.footer')
@endsection