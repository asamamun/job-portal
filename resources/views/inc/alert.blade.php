@if($errors->any())
	@foreach($errors->all() as $error)
		<scritp>alert("{{ $error }}")</scritp>
	@endforeach
@endif
@if(session('error'))
	<script>alert("{{ session('error') }}")</script>

@endif
@if(session('success'))
	<script>alert("{{ session('success') }}")</script>
@endif
