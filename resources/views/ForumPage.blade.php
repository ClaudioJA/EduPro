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
        <section class="forum-detail">
            <div class="question">
                <div class="question__wrapper">
                    <h1>Question: </h1>
                    <p>{{ $forum->subject }}, {{ $forum->grade }} - {{ $creator->name }}</p>
                    <p class="question__detail">{{ $forum->question }}</p>
                    <button class="btn btn__small" id="btn-answer">Answer</button>
                </div>
                <?php
                if (auth()->check()) {
                    $user = auth()->user();
                ?>
                    <form class="question__create question__wrapper" data-hidden="true" action="{{ route('create-reply') }}" method="POST">
                        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                        @if ($forum)
                            <input type="hidden" name="forumId" value='{{ $forum->id }}'>
                        @endif
                        @if ($creator)
                            <input type="hidden" name="userName" value='{{ $user->name }}'>
                        @endif
                        <label for="name">Answer : </label>
                        <textarea type="text" name="answer" id="answer"></textarea>
                        <button class="btn btn__small">Add Answer</button>
                    </form>

                    @foreach($errors->all() as $err)
                        {{ $err }} <br>
                    @endforeach
                <?php
                }
                ?>
                
                <div class="question__wrapper">
                    <h2>Answer :</h2>
                    @forelse($reply as $r)
                        <div class="answer">
                            <h3>{{ $r->userName }}</h3>
                            <p>{{ $r->answer }}</p>
                            <?php
                            if(auth()->user()->userRole == "Admin"){
                            ?>
                                <a href="/reply/delete/{{ $forum->id }}/{{ $r->id }}" class="btn">Delete</a>
                            <?php
                            }
                            ?>
                        </div>
                    @empty
                        <p>No reply yet</p>
                    @endforelse
                </div>
            </div>
        </section>
    @endsection
</body>
</html>