@if($errors->any())
	{{$msg = ""}}
	@foreach($errors->all() as $error)
		{{$msg .= $error}}
	@endforeach
	<script>alert("{{ $msg }}")</script>
@endif

@if(session('error'))
<script>alert("{{ session('error') }}")</script>
@endif

@if(session('success'))
<script>alert("{{ session('success') }}")</script>
@endif