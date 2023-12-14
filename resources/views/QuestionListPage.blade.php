<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>

    @vite(['resources/css/style.css',"resources/css/learning.css", "resources/js/animation.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('content')
        
    
    <form class="teach-form question" action="{{ route('check-answer') }}" method="POST">
        @csrf
        <input type="hidden" name="questionId" value="{{ $exercise->id }}">
        
        <h1 class="teach-form__heading">Exercise : {{ $exercise->subject }}</h1>

        @forelse ($question as $q)
            <div class="teach-form__wrapper">
                <h3>{{ $loop->iteration }}. {{ $q->question }}</h3>
                <div class="teach-form__answer">
                    <label for="name">Correct Answer : </label>
                    <div class="teach-form__radio">
                        <input type="radio" name="{{ $loop->iteration }}" id="optionA" value="optionA" checked>
                        <label for="optionA">{{ $q->optionA }}</label>
                    </div>
                    <div class="teach-form__radio">
                        <input type="radio" name="{{ $loop->iteration }}" id="optionB" value="optionB">
                        <label for="optionB">{{ $q->optionB }}</label>
                    </div>
                    <div class="teach-form__radio">
                        <input type="radio" name="{{ $loop->iteration }}" id="optionC" value="optionC">
                        <label for="optionC">{{ $q->optionC }}</label>
                    </div>
                    <div class="teach-form__radio">
                        <input type="radio" name="{{ $loop->iteration }}" id="optionD" value="optionD">
                        <label for="optionD">{{ $q->optionD }}</label>
                    </div>
                </div>
            </div>

            <?php
                if (auth()->check()){
                    if (auth()->user()->userRole == "Admin") {
            ?>
                <a href="/exercise/question/delete/{{ $exercise->id }}/{{ $q->id }}" class="btn btn__small">Delete Question</a><br><br>
            <?php
                    }
                }
            ?>
        @empty
            <p>There are no Question</p>
        @endforelse
            
        @if($question->isNotEmpty())
            <button class="btn--details">Submit Answer</button>
        @endif
        <?php
            if (auth()->check()){
                if (auth()->user()->userRole == "Admin") {
        ?>
            <a href="/exercise/question/create/{{ $exercise->id }}" class="btn btn__small">Add Question</a>
        <?php
                }
            }
        ?>
    </form>

    

    @endsection
</body>
</html>