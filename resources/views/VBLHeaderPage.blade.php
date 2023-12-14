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
    <section class="teach-container">
        <div class="teach__cta">
            <h1>Video Based Learning</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, nemo?</p>
            <img src="/images/teach_img.png" alt="">
        </div>
        <?php
            if (auth()->check()){
                if (auth()->user()->userRole == "Admin") {
        ?>
            <a href="/vbl/create" class="btn btn__small">Add Course</a>
        <?php
                }
            }
        ?>
        
        <div class="teach-content">
            <h2 class="teach-content__heading">Video Based Learning</h2>
            <div class="teach-content__container">
                @forelse($vbl as $v)
                    <div class="card">
                        <h3>{{ $v->name }} </h3>
                        <p>by {{ $v->teacherName }}</p>
                        <a class="btn--details" href="/vbl/detail/{{ $v->id }}/1">Detail</a>
                    </div>
                @empty
                    <p>There are no VBL at the moments</p>
                @endforelse
            </div>
        </div>
    </section>
    @endsection
</body>
</html>