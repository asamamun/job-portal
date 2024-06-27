@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection
@section('content')
@include('inc/alert')
<form action="" method="post">
  @csrf
  <div class="form-layout">
    <div class="row mg-b-25">
      <div class="col-lg-7">
        <div class="form-group">
          <label class="form-control-label" for="search_form">Form: <span class="tx-danger">*</span></label>
          <input class="form-control" type="date" name="search_form" id="search_form">
          <small>form date must be in YYYY-MM-DD</small>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="form-group">
          <label class="form-control-label" for="search_to">To: <span class="tx-danger">*</span></label>
          <input class="form-control" type="date" name="search_to" id="search_to">
          <small>to date must be in YYYY-MM-DD</small>
        </div>
      </div>
    </div>
    <div class="form-layout-footer">
      <button class="btn btn-info mg-r-5" type="submit" name="submit" value="search">Submit Form</button>
    </div><!-- form-layout-footer -->
  </div><!-- form-layout -->
</form>
@endsection
@section('scripts')

@endsection