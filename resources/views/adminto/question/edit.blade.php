@extends('adminto.layout.admin', ['title' => 'Job Entry', 'name' => 'dashboard'])
@section('head')

@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="header-title">Create Form</h4>
        <p class="text-muted font-14">
            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
        </p>
        <form action="{{ route('question.update', $question->id)  }}" class="parsley-examples" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="category" class="form-label">Category<span class="text-danger">*</span></label>
                <select name="category_id" class="form-select" id="category" require>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{$question->Category->id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="question" class="form-label">Question<span class="text-danger">*</span></label>
                <textarea name="question" class="form-control" id="question" rows="3">{{ $question->question }}</textarea>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="input-group">
                        <label for="optionA" class="btn btn-info option">A</label>
                        <input type="text" name="option_one" class="form-control" id="optionA" value="{{ $question->option_one }}" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label for="optionB" class="btn btn-info option">B</label>
                        <input type="text" name="option_two" class="form-control" id="optionB" value="{{ $question->option_two }}" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="input-group">
                        <label for="optionC" class="btn btn-info option">C</label>
                        <input type="text" name="option_three" class="form-control" id="optionC" value="{{ $question->option_three }}" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label for="optionD" class="btn btn-info option">D</label>
                        <input type="text" name="option_four" class="form-control" id="optionD" value="{{ $question->option_four }}" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="input-group">
                        <label for="CorrectAns" class="btn btn-info">Correct Answer</label>
                        <input type="text" name="answer" class="form-control" id="CorrectAns" value="{{ $question->answer }}" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '.option', function() {
            $result = $(this).next().val();
            $('#CorrectAns').val($result);
        });
    });
</script>
@endsection
