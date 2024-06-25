@extends('jobentry.layout', ['title' => Settings::get()->title,'author' => Settings::get()->author, 'keywords' => Settings::get()->keywords, 'description' => Settings::get()->description])
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

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#CountrySelect').on('change', function() {
        var country_id = $(this).val();
        if (country_id) {
            $.ajax({
                type: "GET",
                url: "{{url('ajax/state')}}/" + country_id,
                success: function(res) {
                    $('#stateSelect').html(res);
                }
            });
        } else {
            $("#stateSelect").empty();
        }
    });

    function editor(id) {
        CKEDITOR.replace(id, {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    }
    editor('citySelectDescription');
</script>
@endSection