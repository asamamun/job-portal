<div class="col-md-3 bg-white pt-3 pb-3">
    {{-- <div class="d-flex mb-4">
        <div class="float-start">
            <a href="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <img src="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" alt="" class="img-thumbnail rounded float-start mb-2" style="height: 150px; width: 150px" />
            </a>
        </div>

        <div class="pl-3">
            <p class="" style="font-size: 20px">{{ auth()->user()->name }}</p>
            <p class="" style="font-size: 20px">{{auth()->user()->applicant->points}}</p>
        </div>
    </div> --}}
    <div class="d-flex mb-4"> 
        <div class="float-start position-relative">
            <a href="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <img src="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" alt="" class="img-thumbnail rounded float-start mb-2" style="height: 150px; width: 150px;" />
                <div class="position-absolute bottom-0 end-0 m-2 ">
                    @if(auth()->user()->image)
                    <form action="{{ route('applicant.update.image') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    @else
                       
                    {{-- <form action="{{ route('applicant.store.image') }}"  method="POST" enctype="multipart/form-data"> --}}
                        <form action="{{ route('applicant.update.image') }}"  method="POST" enctype="multipart/form-data">
                            @csrf
                    @method('PUT')
                    @endif
                        <label for="imageUpload" class="upload-label">
                            <img src="placeholder.jpg" alt="" class="img-fluid">
                            <i class="bi bi-pencil-square text-danger text-success mt-2 "></i>
                        </label>
                        <input type="file" id="imageUpload" name="image" parsley-trigger="change" required accept="image/*" style="display: none;">
                    
                        <!-- Plus icon for adding image -->
                        <button type="submit" class="btn text-success mt-2" style="font-size: 15px">
                            <i class="bi bi-plus-square mt-2" ></i>
                        </button>
                    </form>
                </div>
            </a>
        </div>
        <div class="pl-3 " style="margin-top: auto;">
            <p class="mb-0" style="font-size: 16px; font-weight: bold">{{ auth()->user()->name }}</p>
            <p class="mb-0" style="font-size: 14px">{{auth()->user()->applicant->points}}</p>
            <p class="mb-0" style="font-size: 14px">{{auth()->user()->applicant->dob}}</p>
        </div>
    </div>

    <hr style="clear: both;"/>
    <div>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                    <span><i class="bi bi-person-circle" style="font-size: 20px;"></i> Profile Edit </span>
                </button>
                <div class="collapse" id="home-collapse">
                    <ul class="nav-second-level" style="list-style: none;">
                        <li><a href="{{ url('applicant/profile') }}">Personel Details</a></li>
                       
                        <li>
                            <a href="#sidebarTables45345" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>Experience </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables45345">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('experience.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('experience.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables85678" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>Education</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables85678">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('education.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('education.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables5656" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>References</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables5656">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('reference.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('reference.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarTables1111" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>Skill </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables1111">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('skill.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('skill.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarTables555" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>Project</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables555">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('project.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('project.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarTables444" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>Language</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables444">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('language.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('language.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarTables333" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span>links</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables333">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('link.create')}}"> Create</a>
                                    </li>
                                    <li>
                                        <a href="{{route('link.index')}}"> Show </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <span><i class="bi bi-file-person-fill" style="font-size: 20px;"></i> CV</span>
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="nav-second-level">
                        <li><a href="{{route('cv', auth()->user()->id)}}">CV <span class="badge bg-secondary">classic</span></a></li>
                        <li><a href="#">CV <span class="badge bg-secondary">pro</span></a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#orders-collapseffasfa" aria-expanded="false">
                    <span><i class="bi bi-file-post" style="font-size: 20px;"></i> Job Post</span>
                </button>
                <div class="collapse" id="orders-collapseffasfa">
                    <ul class="nav-second-level">
                        <li><a href="#">Applied Jobs</a></li>
                        <li><a href="#">Interview</a></li>
                        <li><a href="#">Save Post</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    <span><i class="bi bi-gear-fill" style="font-size: 20px;"></i> Extra Service <span class="badge bg-danger">New</span></span>
                </button>
                <div class="collapse" id="orders-collapse">
                    <ul class="nav-second-level">
                        <li><a href="#">Exam</a></li>
                        <li><a href="#">Result</a></li>
                        <li><a href="#">Recharge</a></li>
                        <li><a href="#">Withdraw</a></li>
                        <li><a href="#">Save Post</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>