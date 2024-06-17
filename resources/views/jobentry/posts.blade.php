@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection
@section('content')
@include('jobentry.inc.jumbotron')

<div class="container py-4">
    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="" style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                    <a href="" class="btn btn-primary">View Details</a>
                    <a href="{{url('applicant/apply/'.$post->id)}}" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection