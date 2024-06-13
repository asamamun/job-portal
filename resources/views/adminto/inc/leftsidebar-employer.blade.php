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
                    <a href="#">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Reviews </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarTables32453" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Posts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables32453">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('posts.create')}}"> Create</a>
                            </li>
                            <li>
                                <a href="{{route('posts.index')}}"> Show </a>
                            </li>
                            <li>
                                <a href="#"> Save Posts </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTables3245633" data-bs-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Transactions </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables3245633">
                        <ul class="nav-second-level">
                            <li>
                                <a href=""> Recharge </a>
                            </li>
                            <li>
                                <a href=""> Withdraw </a>
                            </li>
                            <li>
                                <a href="#"> History </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->