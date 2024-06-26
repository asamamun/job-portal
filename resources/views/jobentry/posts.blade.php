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
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 01 Jan, 2045</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 123 Position</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $123 - $456</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: New York, USA</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
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