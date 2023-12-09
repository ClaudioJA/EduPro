<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/style.css'])

</head>
<body>
    @extends('Navbar')
    @section('title', 'Homepage')
    @section('content')
    
    <section class="banner">
        <div class="banner__wrapper">
            <h1>Educational Online Courses</h1>
            <p>Let's start with a free class!</p>
            <a href="">Join Our Class</a>
        </div>
        <img class="banner__img" src="" alt="">
    </section>
    <section class="main">
        <div class="triple">
            <h1 class="triple__heading"></h1>
            <div class="triple__wrapper">
                <div>
                    <img src="" alt="">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>
</html> 