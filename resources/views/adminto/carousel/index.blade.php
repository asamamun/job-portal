@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')
<!-- third party css -->
<link href="{{ asset('adminto/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminto/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminto/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminto/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mt-0 header-title">Default Example</h4>
       
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Header</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>


                            <tbody>
                                @forelse ($carousels as $carousel)
                                <tr class="odd">
                                    <td class="" tabindex="0">{{$carousel->header}}</td>
                                    <td class="" tabindex="0">{{$carousel->title}}</td>
                                    <td>
                                        @if($carousel->image)
                                            <a href="{{ asset('storage/' . $carousel->image) }}"><img src="{{ asset('storage/' . $carousel->image) }}" alt="{{$carousel->title}}" style="width: 100px; height: auto;"></a>
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-arrow-down-square"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="{{route('carousel.edit', $carousel->id)}}">Edit</a></li>
                                                    <form action="{{route('carousel.destroy', $carousel->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <li><button class="dropdown-item" type="submit">Delete</button></li>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="odd">
                                    <td class="" colspan="3">empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('adminto/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('adminto/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('adminto/assets/js/pages/datatables.init.js') }}"></script>
</script>
@endsection