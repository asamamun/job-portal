<div class="container-xxl py-5 bg-dark page-header mb-1">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ isset($title) ? $title : Settings::get()->title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ isset($title) ? $title : Settings::get()->title }}</li>
            </ol>
        </nav>
    </div>
</div>