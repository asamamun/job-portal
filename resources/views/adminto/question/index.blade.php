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
        <p class="text-muted font-14 mb-3">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Default Example</h4>
                        <p class="text-muted font-14 mb-3">
                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>


                            <tbody>
                                @forelse ($functionals as $functional)
                                <tr class="odd">
                                    <td class="" tabindex="0">{{$functional->name}}</td>
                                    <td><i class="{{$functional->icon}}"></i></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-arrow-down-square"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="{{route('functional.edit', $functional->id)}}">Edit</a></li>
                                                    <form action="{{route('functional.destroy', $functional->id)}}" method="POST">
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