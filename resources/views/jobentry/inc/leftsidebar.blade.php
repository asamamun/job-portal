<div class="col-md-3 bg-white pt-3 pb-3">
    <div class="d-flex mb-4">
        <div class="float-start">
            <a href="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <img src="{{ asset('storage/' . (auth()->user()->image ? auth()->user()->image : 'img/avatar.png')) }}" alt="" class="img-thumbnail rounded float-start mb-2" style="height: 150px; width: 150px" />
            </a>
        </div>

        <div class="pl-3">
            <p class="" style="font-size: 20px">{{ auth()->user()->name }}</p>
            <p class="" style="font-size: 20px">{{auth()->user()->applicant->points}}</p>
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
                    <ul class="nav-second-level">
                        <li><a href="#">Personel Details</a></li>
                        <li><a href="#">Skills</a></li>

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

                        <li><a href="#">Education</a></li>
                        <li><a href="#">References</a></li>
                        <li><a href="#">Project</a></li>
                        <li><a href="#">Language</a></li>
                        <li><a href="#">links</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <span><i class="bi bi-file-person-fill" style="font-size: 20px;"></i> CV</span>
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="nav-second-level">
                        <li><a href="#">view</a></li>
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