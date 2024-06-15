<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
    <style>
        input:checked+label {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Best Preparation For Exam</h1>
                </div>
            </div>
            <div class="row">
                <form action="{{url('applicant/exam/result')}}" method="post" id="subForm">
                    @csrf
                    @foreach ($questions as $i => $question)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{$i+1}}. {{$question->question}}</h5>
                                <ol type="a">
                                    <li>
                                        <input type="radio" id="op1{{$question->id}}" name="{{$question->id}}" value="{{$question->option_one}}" style="display:none;" />
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
                    <button type="submit" id="submitGO" class="btn btn-success" name="submit" value="result">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>