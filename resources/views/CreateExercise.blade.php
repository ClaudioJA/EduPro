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
    
    <form class="teach-form" action="{{ route('create-exercise') }}" method="POST">
        <h1>Create Exercise</h1>
        <input type="hidden" name="_token" value='{{ csrf_token() }}'>

        <div class="teach-form__wrapper">
            <label for="name">Subject : </label>
            <select id="selectedSubject" name="selectedSubject">
                <option value="Math">Math</option>
                <option value="Indonesian">Indonesian</option>
                <option value="English">English</option>
                <option value="Physics">Physics</option>
                <option value="Biology">Biology</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Economy">Economy</option>
                <option value="Geography">Geography</option>
                <option value="Sociology">Sociology</option>
            </select>
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Title : </label>
            <textarea type="text" name="title" id="title"></textarea>
        </div>

        <button>Create</button>

        <div class="teach-form__container">
            @foreach($errors->all() as $err)
                <p class="error">{{ $err }}</p>
            @endforeach
        </div>
    </form>
    @endsection
</body>
</html>