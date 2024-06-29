<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SSLCommerz">
    <title>Example - Hosted Checkout | SSLCommerz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Hosted Payment - SSLCommerz</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. We have provided this sample form for understanding Hosted Checkout Payment with SSLCommerz.</p>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-2 mb-4">
                <div class="card">
                    <div class="row card-body">
                        <div class="col-md-3">
                            <img src="{{asset('storage/'.auth()->user()->image)}}" class="img-thumbnail w-100 rounded" />
                        </div>
                        <div class="col-md-9">
                            <p class="mb-0">Name:- {{auth()->user()->name}}</p>
                            <p class="mb-0">Roles:- {{auth()->user()->roles}}</p>
                            <p class="mb-0">Email:- {{auth()->user()->email}}</p>
                            <p class="mb-0">Mobile:- {{auth()->user()->contact}}</p>
                        </div>
                    </div>
                    <div class="text-right pb-3 pr-3">
                        <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 order-md-2 mb-4">
                <h2 class="d-flex justify-content-between align-items-center mb-3">Recharge History</h2>
                <p class="text-muted mb-4">Please fill the form below.</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Charge</th>
                                <th scope="col">Total</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recharges as $recharge)
                            <tr>
                                <td>{{Carbon\Carbon::parse($recharge->created_at)->format('d/M/Y')}}</td>
                                <td>{{$recharge->amount}}</td>
                                <td>{{$recharge->charge}}</td>
                                <td>{{$recharge->amount + $recharge->charge}}</td>
                                <td>{{$recharge->types}}</td>
                                <td>{{$recharge->status}}</td>
                                <td><a href="{{ url('/invoice/'.$recharge->id) }}">view</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="total_amount">Total Amount</label>
                            <input type="number" name="total_amount" min="10" class="form-control" id="total_amount" value="100" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="customer_name">Name</label>
                            <input type="text" name="customer_name" class="form-control" id="customer_name" value="{{auth()->user()->name}}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mobile">Mobile</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+88</span>
                            </div>
                            <input type="text" name="customer_mobile" class="form-control" id="mobile" value="{{auth()->user()->contact}}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="customer_email" class="form-control" id="email" value="{{auth()->user()->email}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" value="{{auth()->user()->address}}" required>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Checkout</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>