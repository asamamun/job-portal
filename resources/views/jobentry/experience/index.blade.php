@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Profile</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Experience Add</h4>
                
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Description</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @forelse ($experiences as $experience)
                            <tr class="odd">
                                <td class="" tabindex="0">{{$experience->company}}</td>
                                <td class="">{{$experience->address}}</td>
                                <td class="">{{$experience->phone}}</td>
                                <td class="">{{$experience->position}}</td>
                                <td class="">{{$experience->department}}</td>
                                <td class="">{{$experience->description}}</td>
                                <td class="">{{Carbon\Carbon::parse($experience->from)->format('d/m/y')}}</td>
                                <td class="">{{$experience->to ? Carbon\Carbon::parse($experience->to)->format('d/m/y') : "continue"}}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-arrow-down-square"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="{{route('experience.edit', $experience->id)}}">Edit</a></li>
                                                <form action="{{route('experience.destroy', $experience->id)}}" method="POST">
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
                                <td class="text-center" colspan="100" style="color: red;">Empty</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('jobentry.inc.footer')
@endsection