<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBL</title>

    @vite(['resources/css/style.css',"resources/css/learning.css", "resources/js/animation.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('content')
    <form action="{{ route('create-course') }}" class="teach-form" method="POST">
        <h1>Create VBL</h1>
        <input type="hidden" name="_token" value='{{ csrf_token() }}'>

        <div class="teach-form__wrapper">
            <label for="name">Title : </label>
            <textarea type="text" name="title" id="title"></textarea>
        </div>

        <div class="teach-form__wrapper">
            <label for="name">Instructor Name : </label>
            <textarea type="text" name="instructor" id="instructor"></textarea>
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