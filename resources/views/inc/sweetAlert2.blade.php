@if($errors->any())
{{$msg = ""}}
@foreach($errors->all() as $error)
{{$msg .= $error}}
@endforeach
<script>alert("{{ $msg }}")</script>
@endif


@if(session('error'))
<script>
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "{{ session('error') }}"
  });
</script>
@endif


@if(session('success'))
<script>
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "{{ session('success') }}",
    showConfirmButton: false,
    timer: 1500
  });
</script>
@endif