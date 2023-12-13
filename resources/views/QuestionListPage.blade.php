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
                <input type="radio" name="{{ $loop->iteration }}" id="optionD" value="optionD">{{ $q->optionD }}<br><br>
            </label>
        @empty
            <p>There are no Question</p>
        @endforelse
            
        @if($question->isNotEmpty())
            <button>Submit Answer</button>
        @endif

    </form>

    @endsection
</body>
</html>