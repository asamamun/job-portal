@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection
@section('content')
@include('jobentry.inc.carousel')
@include('jobentry.inc.search')


@include('jobentry.inc.category')
<img src="{{ ads::get('body') }}" alt="" width="100%">
@include('jobentry.inc.about')
@include('jobentry.inc.job')
@include('jobentry.inc.testimonial')
@include('jobentry.inc.footer')

@endsection