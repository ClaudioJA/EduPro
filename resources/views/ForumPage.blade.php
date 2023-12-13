<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <style>
        .forum-item{
            border: 1px solid black;
        }

        .hidden {
            display: none;
        }

        .answerForm{
            border: 1px solid black;
            padding: 2%;
        }
    </style>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>Forum</h1>

        {{ $forum->subject }}<br>
        {{ $forum->grade }} - {{ $creator->name }}<br>
        {{ $forum->question }}
        <br><br>

        <?php
        if (auth()->check()) {
            $user = auth()->user();
        ?>
            <button onclick="toggleForm()">Answer</button><br>
            <div id="answerForm" class="hidden answerForm">
                <form action="{{ route('create-reply') }}" method="POST">
                    <input type="hidden" name="_token" value='{{ csrf_token() }}'>
    
                    @if ($forum)
                        <input type="hidden" name="forumId" value='{{ $forum->id }}'>
                    @endif
                    
                    @if ($creator)
                        <input type="hidden" name="userName" value='{{ $user->name }}'>
                    @endif
    
                    <label for="name">Answer : </label><br>
                    <textarea type="text" name="answer" id="answer"></textarea>
                    <br><br>
    
                    <button>Add Answer</button>
                </form>

                @foreach($errors->all() as $err)
                    {{ $err }} <br>
                @endforeach
            </div>
            <br><br>
        <?php
        }
        ?>
        
        <p>Answer :</p>
        @forelse($reply as $r)
            {{ $r->userName }}<br>
            {{ $r->answer }}
            <?php
            if(auth()->user()->userRole == "Admin"){
            ?>
                <br><a href="/reply/delete/{{ $forum->id }}/{{ $r->id }}"><button>Delete</button></a>
            <?php
            }
            ?>
            <br><br>    
        @empty
            <p>No reply yet</p>
        @endforelse
        
    @endsection

    <script>
        function toggleForm() {
            var answerForm = document.getElementById('answerForm');
            answerForm.style.display = (answerForm.style.display === 'none') ? 'inline-block' : 'none';
        }
    </script>
</body>
</html>