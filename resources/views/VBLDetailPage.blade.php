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
        <section class="teach-container teach-container--details">
            <div class="teach__cta">
                <h1>Video Based Learning</h1>
                <iframe class="teach__video" src="{{ $curr->videoUrl }}" frameborder="0" allowfullscreen></iframe>
                <div class="teach__cta--details">
                    <h2>{{ $curr->title }} <span>Chapter {{ $curr->chapter }}</span> </h2>
                    <p>Desc :</p>
                    <p>{{ $curr->desc }}</p>
                    <?php
                        if (auth()->check()){
                            if (auth()->user()->userRole == "Admin") {
                    ?>
                        <a href="/vbldetail/create/{{ $headerId }}" class="btn btn__small">Add Chapter</a>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="teach-content">
                <h2 class="teach-content__heading">Chapters</h2>
                <div class="teach-content__container details__container">
                    @forelse($list as $l)
                        <a class="card card--details" href="/vbl/detail/{{ $l->headerId }}/{{ $l->chapter }}">
                            <h3>Chapter {{ $l->chapter }}</h3>
                            <p>{{ $l->title }}</p>
                        </a>
                    @empty
                        <p>There are no other Chapters at the moments</p>
                    @endforelse
                </div>
            </div>
        </section>

    @endsection
</body>
</html>