@extends('adminto.layout.employer', ['title' => 'Job Entry', 'name' => 'dashboard'])
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
        <h3 class="mt-0 header-title">All Job Post</h3>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Default Example</h4>

                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Job Type</th>
                                    <th>Address</th>
                                    <th>Salary</th>
                                    <th>Deadline</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>


                            <tbody>
                                @forelse ($posts as $post)
                                <tr class="odd">
                                    <td class="" tabindex="0">{{Str::limit($post->title, 30)}}</td>
                                    <td>{{$post->type}}</td>
                                    <td>{{$post->address}}</td>
                                    <td>{{$post->salary}}</td>
                                    <td>{{$post->deadline}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-arrow-down-square"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="{{route('posts.edit', $post->id)}}">Edit</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied', $post->id)}}">Application</a></li>
                                                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
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
