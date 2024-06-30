<!-- Spinner Start -->
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">{{Settings::get()->title}}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Functional</a>
                <div class="dropdown-menu rounded-0 m-0" id="PostCatFunctioal"></div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Industrial</a>
                <div class="dropdown-menu rounded-0 m-0" id="PostCatIndustrial"></div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Special</a>
                <div class="dropdown-menu rounded-0 m-0" id="PostCatSpecial"></div>
            </div>
            <a href="{{route('about')}}" class="nav-item nav-link">About US</a>
            @guest
            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
            @endguest

            @if (Auth::check())
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    @if(auth()->user()->roles == 'admin')
                    <a href="{{ url('admin/dashboard') }}" class="dropdown-item">Dashboard</a>
                    @elseif(auth()->user()->roles == 'employer')
                    <a href="{{ url('employer/dashboard') }}" class="dropdown-item">Dashboard</a>
                    @else
                    <a href="{{ url('applicant/exam') }}" class="dropdown-item">Online Exam</a>
                    <a href="{{ route('applicant.profile') }}" class="dropdown-item">Profile Edit</a>
                    @endif
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </div>
            @endif

        </div>
        @if(auth()->user() && auth()->user()->roles == 'employer')
        <a href="{{ route('posts.create') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
        @else
        <a href="{{ route('post.all') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Find A Job<i class="fa fa-arrow-right ms-3"></i></a>
        @endif
    </div>
</nav>
<!-- Navbar End -->