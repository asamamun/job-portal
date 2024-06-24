@extends('jobentry.layout', ['title' => 'Job Entry'])
@section('head')

@endsection

@section('content')
@include('jobentry.inc.jumbotron')
<div class="container-fluid pt-3 pb-3" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Link</h1>
        <div class="row g-5">
            @include('jobentry.inc.leftsidebar') 
            <div class="card col-9">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Link Add</h4>
                
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr> 
                                <th>title</th>
                                <th>url</th>
                                <th>Action</th>
                             
                                
                            </tr>
                        </thead>
          

                        <tbody>
                            @forelse ($links as $link)
                            <tr class="odd">
                                <td class="" tabindex="0">{{$link->title}}</td>
                                <td class="">{{$link->url}}</td>
                        
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-arrow-down-square"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="{{route('link.edit', $link->id)}}">Edit</a></li>
                                                <form action="{{route('link.destroy', $link->id)}}" method="POST">
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
