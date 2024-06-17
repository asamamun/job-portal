<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <style>
        input:checked+label {
            background-color: green;
            color: white;
        }
    </style>
    <script>
        // Function to submit the form
        function refreshPage() {
            location.reload();
        }

        // Function to start the countdown
        function startCountdown(duration, display) {
            var timer = duration,
                minutes, seconds;
            var countdownInterval = setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    refreshPage();
                }
            }, 1000);
        }

        // When the window loads, start the countdown
        window.onload = function() {
            var fiveMinutes = 60 * 5,
                display = document.querySelector('#time');
            startCountdown(fiveMinutes, display);
        };
    </script>
</head>

<body>
    @include('inc.alert')
    <div class="album py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="display-3 text-center mb-2">Best Preparation For Exam</h1>
                    <h3 class="text-center mb-2">Please answer all the questions.</h3>
                    <p class="text-center mb-4">Time remaining: <span id="time">05:00</span> minutes</p>
                </div>
            </div>
            <div class="row">
                <form action="{{url('applicant/result')}}" method="post" id="subForm">
                    @csrf
                    @foreach ($questions as $i => $question)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{$i+1}}. {{$question->question}}</h5>
                                <ol type="a">
                                    <li>
                                        <input type="radio" id="op1{{$question->id}}" name="{{$question->id}}" value="{{$question->option_one}}" style="display:none;" required />
                                        <label for="op1{{$question->id}}">{{$question->option_one}}</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="op2{{$question->id}}" name="{{$question->id}}" value="{{$question->option_two}}" style="display:none;" />
                                        <label for="op2{{$question->id}}">{{$question->option_two}}</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="op3{{$question->id}}" name="{{$question->id}}" value="{{$question->option_three}}" style="display:none;" />
                                        <label for="op3{{$question->id}}">{{$question->option_three}}</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="op4{{$question->id}}" name="{{$question->id}}" value="{{$question->option_four}}" style="display:none;" />
                                        <label for="op4{{$question->id}}">{{$question->option_four}}</label>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" id="submitGO" class="btn btn-success mt-3 btn-lg rounded-pill text-uppercase align-self-center" name="submit" value="result">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>

</html>