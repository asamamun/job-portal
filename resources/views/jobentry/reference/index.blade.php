@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Reference</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Reference Add</h4>
                
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Organization</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Relation</th>
                                <th>Email</th>
                                <th>Address</th>
                                
                            </tr>
                        </thead>
          

                        <tbody>
                            @forelse ($references as $reference)
                            <tr class="odd">
                                <td class="" tabindex="0">{{$reference->name}}</td>
                                <td class="">{{$reference->organization}}</td>
                                <td class="">{{$reference->designation}}</td>
                                <td class="">{{$reference->phone}} </td>
                                <td class="">{{$reference->relation}}</td>
                                <td class="">{{$reference->email}}</td>
                                <td class="">{{$reference->address}}</td>
                        
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-arrow-down-square"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="{{route('reference.edit', $reference->id)}}">Edit</a></li>
                                                <form action="{{route('reference.destroy', $reference->id)}}" method="POST">
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
