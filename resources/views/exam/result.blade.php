<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->name}}</title>

    <!-- Facebook Open Graph Tags -->
    <meta property="og:title" content="{{$user->name}}" />
    <meta property="og:description" content="{{$user->name}} your result is {{$result->marks}} out of {{$result->marks_outof}}. You are {{$result->status}}." />
    <meta property="og:image" content="{{ asset('storage/' . ($user->image ? $user->image : 'img/avatar.png')) }}" />
    <meta property="og:url" content="{{env('APP_URL')}}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{$user->name}}" />
    <meta name="twitter:description" content="{{$user->name}} your result is {{$result->marks}} out of {{$result->marks_outof}}. You are {{$result->status}}." />
    <meta name="twitter:image" content="{{ asset('storage/' . ($user->image ? $user->image : 'img/avatar.png')) }}" />
    <meta name="twitter:site" content="@isratahamedonik" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <style>
        .center-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* 100% of the viewport height */
        }
    </style>
</head>

<body>
    @include('inc.alert')
    <!-- Your page content -->
    <div class="center-screen">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . ($user->image ? $user->image : 'img/avatar.png')) }}" class="img-fluid rounded-start" alt="..." style="width: 200px; height: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ ucwords($user->name) }}</h5>
                        <p class="card-text">{{ ucfirst($user->name) }} your result is {{$result->marks}} out of {{$result->marks_outof}}. You are {{$result->status}}.</p>
                        <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($result->created_at)->format('d M, Y') }}</small></p>
                        Share:-
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{env('APP_URL').'/result/page/'.$result->id}}" class="btn"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{env('APP_URL').'/result/page/'.$result->id}}" class="btn"><i class="bi bi-twitter"></i></a>
                        <a href="https://wa.me/?text={{env('APP_URL').'/result/page/'.$result->id}}" class="btn"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{env('APP_URL').'/result/page/'.$result->id}}" class="btn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://telegram.me/share/url?url={{env('APP_URL').'/result/page/'.$result->id}}" class="btn"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>