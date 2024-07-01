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
                                    <th>#</th>
                                    <th>image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>


                            <tbody>
                                {{$i = 1}}
                                @forelse ($applicantposts as $applicantpost)
                                <tr class="odd">
                                    <td class="" tabindex="0">{{$i++}}</td>
                                    <td class="" tabindex="0">
                                        <img src="{{asset('storage/'.($applicantpost->applicant->user->image ? $applicantpost->applicant->user->image : 'img/no_image.png'))}}" alt="image" height="50" width="50" />
                                    </td>
                                    <td class="" tabindex="0">{{$applicantpost->applicant->user->name}}</td>
                                    <td>{{$applicantpost->applicant->user->email}}</td>
                                    <td>{{$applicantpost->applicant->user->contact}}</td>
                                    <td>{{$applicantpost->status}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-arrow-down-square"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "applied"])}}">applied</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "short list"])}}">short list</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "under review"])}}">under review</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "interview"])}}">interview</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "accepted"])}}">accepted</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "rejected"])}}">rejected</a></li>
                                                    <li><a class="dropdown-item" href="{{route('posts.applied.status', [$applicantpost->id, "hired"])}}">hired</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="odd">
                                    <td class="" colspan="100">empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <a href="{{route('posts.applied.download', [$id, 'interview'])}}">interview</a>
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
