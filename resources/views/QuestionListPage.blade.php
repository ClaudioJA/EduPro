<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>
</head>
<body>
    @extends('Navbar')
    @section('content')
        
    Exercise : {{ $exercise->subject }}
    <br><br>

    <form action="{{ route('check-answer') }}" method="POST">
        @csrf

        <input type="hidden" name="questionId" value="{{ $exercise->id }}">

        @forelse ($question as $q)
            {{ $loop->iteration }}. {{ $q->question }}<br>
            <label for="">
                <input type="radio" name="{{ $loop->iteration }}" id="optionA" value="optionA">{{ $q->optionA }}<br>
            </label>
            <label for="">
                <input type="radio" name="{{ $loop->iteration }}" id="optionB" value="optionB">{{ $q->optionB }}<br>
            </label>
            <label for="">
                <input type="radio" name="{{ $loop->iteration }}" id="optionC" value="optionC">{{ $q->optionC }}<br>
            </label>
            <label for="">
                <input type="radio" name="{{ $loop->iteration }}" id="optionD" value="optionD">{{ $q->optionD }}<br>
            </label>

            <?php
                if (auth()->check()){
                    if (auth()->user()->userRole == "Admin") {
            ?>
                <br><a href="/exercise/question/delete/{{ $exercise->id }}/{{ $q->id }}">Delete Question</a><br><br>
            <?php
                    }
                }
            ?>
        @empty
            <p>There are no Question</p>
        @endforelse
            
        @if($question->isNotEmpty())
            <button>Submit Answer</button>
        @endif

    </form>

    <?php
            if (auth()->check()){
                if (auth()->user()->userRole == "Admin") {
        ?>
            <br><a href="/exercise/question/create/{{ $exercise->id }}"><button>Add Question</button></a><br><br>
        <?php
                }
            }
        ?>

    @endsection
</body>
</html>