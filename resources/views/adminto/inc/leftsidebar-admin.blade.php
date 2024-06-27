<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        @include('adminto.inc._admininfo')

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="index.html">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Admin Profile </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('settings.edit', Settings::$id)}}">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Settings </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarwerrTables45355322345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Advertisement </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarwerrTables45355322345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('advertisement.create')}}"> Create </a>
                            </li>
                            <li>
                                <a href="{{route('advertisement.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Applicants</li>
                <li>
                    <a href="#sidebarTables45345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Post Types </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables45345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('post_type.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('post_type.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Job Posts</li>
                <li>
                    <a href="#sidebarTables342342" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Functional </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables342342">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('functional.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('functional.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables534625" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Industrial </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables534625">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('industrial.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('industrial.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables4365" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Special </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables4365">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('special.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('special.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebardfsdfTables4365" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Skill Type </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebardfsdfTables4365">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('skill_type.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('skill_type.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables3423454534432" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Post </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables3423454534432">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">New Posts</a>
                            </li>
                            <li>
                                <a href="#">Published Posts</a>
                            </li>
                            <li>
                                <a href="#">Pro Posts</a>
                            </li>
                            <li>
                                <a href="#">Hot Posts</a>
                            </li>
                            <li>
                                <a href="#">Deleted Posts</a>
                            </li>
                            <li>
                                <a href="#">Expired Posts</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Address</li>
                <li>
                    <a href="#sidebarTables45352345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Country </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables45352345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('country.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('country.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables453453423" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> State </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables453453423">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('state.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('state.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Quiz Games</li>
                <li>
                    <a href="#sidebarTables45355322345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Quiz Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables45355322345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('category.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('category.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables453532422345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Question </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables453532422345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('question.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('question.index')}}"> Show </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables453532434222345" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Quiz Result </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables453532434222345">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#"> Daily Highest</a>
                            </li>
                            <li>
                                <a href="#"> All Time Highest </a>
                            </li>
                            <li>
                                <a href="#"> All Result </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Reports</li>
                <li>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Daily Income</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Total Income</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Mothly Income</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->