<!-- User box -->
<div class="user-box text-center">

    <img src="{{ asset('adminto/assets/images/users/user-1.jpg ') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
    <div class="dropdown">
        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
        <div class="dropdown-menu user-pro-dropdown">

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user me-1"></i>
                <span>My Account</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-settings me-1"></i>
                <span>Settings</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-lock me-1"></i>
                <span>Lock Screen</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-log-out me-1"></i>
                <span>Logout</span>
            </a>

        </div>
    </div>

    <p class="text-muted left-user-info">{{ Auth::user()->roles }}</p>

    <ul class="list-inline">
        <li class="list-inline-item">
            <a href="{{ route('settings.index') }}" class="text-muted left-user-info">
                <i class="mdi mdi-cog"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <label for="hsduygaiudf"><i class="mdi mdi-power"></i></label>
                <input type="submit" value="Logout" class="d-none" id="hsduygaiudf">
            </form>
        </li>
    </ul>
</div>