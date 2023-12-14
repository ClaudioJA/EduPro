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
        
    <form class="teach-form" action="{{ route('create-question') }}" method="POST">
        <h1>Add Question</h1>
        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
        <input type="hidden" name="exerciseId" value='{{ $id }}'>


        <div class="teach-form__wrapper">
            <label for="name">Question : </label>
            <textarea type="text" name="question" id="question"></textarea>
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Option A : </label>
            <input type="text" name="optionA" id="optionA">
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Option B : </label>
            <input type="text" name="optionB" id="optionB">
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Option C : </label>
            <input type="text" name="optionC" id="optionC">
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Option D : </label>
            <input type="text" name="optionD" id="optionD">
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Correct Answer : </label>
            <div class="teach-form__radio">
                <input type="radio" id="optionA" name="correctOption" value="optionA">
                <label for="optionA">Option A</label>
            </div>
            <div class="teach-form__radio">
                <input type="radio" id="optionB" name="correctOption" value="optionB">
                <label for="optionB">Option B</label>
            </div>
            <div class="teach-form__radio">
                <input type="radio" id="optionC" name="correctOption" value="optionC">
                <label for="optionC">Option C</label>
            </div>
            <div class="teach-form__radio">
                <input type="radio" id="optionD" name="correctOption" value="optionD">
                <label for="optionD">Option D</label>
            </div>
        </div>
        
        <button class="btn btn__small">Create</button>
        <div class="teach-form__container">
            @foreach($errors->all() as $err)
                <p class="error">{{ $err }}</p>
            @endforeach
        </div>
    </form>

    @endsection
</body>
</html>