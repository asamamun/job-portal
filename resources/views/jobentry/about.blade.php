@extends('jobentry.layout', ['title' => Settings::get()->title,'author' => Settings::get()->author, 'keywords' => Settings::get()->keywords, 'description' => Settings::get()->description])
@section('head')

@endsection
@section('content')


@include('jobentry.inc.jumbotron', ['title' => 'About Us'])
@include('jobentry.inc.about')
@include('jobentry.inc.testimonial')
@include('jobentry.inc.footer')

@endsection

@section('script')

@endSection