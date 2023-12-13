<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    @vite(['resources/css/style.css',"resources/css/forum.css", "resources/js/animation.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('content')
        <section class="cta">
            <h1>FORUM</h1>
            <p>Help with your learning obstacles with the Discussion Forum</p>
            <button class="btn forum--askbtn">Ask Questions</button>
        </section>    
        <section class="forum">
            <?php
                if (auth()->check()) {      
            ?>
            <form class="form form--forum" data-hidden="true" action="{{ route('create-forum') }}" method="POST">
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>  

                @if ($user)
                    <input type="hidden" name="creatorId" value='{{ $user->id }}'>
                @endif

                <div class="form__wrapper">
                    <label for="subject">Subject : </label>
                    <select id="subject" name="selectedSubject">
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

                <div class="form__wrapper">
                    <label for="grade">Grade : </label>
                    <select id="grade" name="selectedGrade">
                        <option value="Grade School">Grade School</option>
                        <option value="Middle School">Middle School</option>
                        <option value="High School">High School</option>
                        <option value="University">University</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form__wrapper">
                    <label for="name">Question : </label><br>
                    <textarea type="text" name="question" id="question"></textarea>
                </div>

                <button class="btn">Add Forum</button>
            </form>
            <?php

                } else {
                    
                }
            ?>
            <div class="content">
            @forelse($forum as $f)
                <div class="content__container">
                    <a class="content__link" href="/forum/{{$f->id}}">
                        <h3>{{ $f->subject }}</h3>
                        <p>{{ $f->question }}</p>
                    </a>
                    <?php
                        if (auth()->check()){
                            if (auth()->user()->userRole == "Admin") {
                    ?>
                        <a href="/forum/delete/{{ $f->id }}"><button>Delete Forum</button></a>
                    <?php
                            }
                        }
                    ?>
                </div> 
            @empty
                <p>There are no Forum at the moments</p>
            @endforelse
            </div>
        </section>
        
    @endsection
</body>
</html>