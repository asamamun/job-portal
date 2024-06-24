@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Education</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Education Add</h4>
                
                    <div class="table-responsive"> <!-- Add this div for responsive table -->
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Level</th>
                                    <th>Institute</th>
                                    <th>Board</th>
                                    <th>Duration</th>
                                    <th>Session</th>
                                    <th>Subject</th>
                                    <th>Group</th>
                                    <th>Division</th>
                                    <th>Grade</th>
                                    <th>Grade Out Of</th>
                                    <th>Passing Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($educations as $education)
                                <tr class="odd">
                                    <td class="" tabindex="0">{{$education->level}}</td>
                                    <td class="">{{$education->institute}}</td>
                                    <td class="">{{$education->board}}</td>
                                    <td class="">{{$education->duration}} years</td>
                                    <td class="">{{$education->session}}</td>
                                    <td class="">{{$education->subject}}</td>
                                    <td class="">{{$education->group}}</td>
                                    <td class="">{{$education->division}}</td>
                                    <td class="">{{$education->grade}}</td>
                                    <td class="">{{$education->grade_out_of}}</td>
                                    <td class="">{{$education->passing_year}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-arrow-down-square"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="{{route('education.edit', $education->id)}}">Edit</a></li>
                                                    <form action="{{route('education.destroy', $education->id)}}" method="POST">
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
</div>
@include('jobentry.inc.footer')
@endsection
