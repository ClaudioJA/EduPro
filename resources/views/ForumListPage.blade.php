<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <style>
        .forum{
            border: 1px solid black;
        }

        .createForum{
            border: 1px solid black;
            padding: 2%;
        }
    </style>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>Forum List</h1>

        <?php
            if (auth()->check()) {
                
        ?>
        
        <button onclick="toggleForm()">Add New Forum</button><br>

        <div id="createForum" class="hidden createForum">
            <form action="{{ route('create-forum') }}" method="POST">
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>  

                @if ($user)
                    <input type="hidden" name="creatorId" value='{{ $user->id }}'>
                @endif

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
                <br><br>

                <label for="grade">Grade : </label>
                <select id="grade" name="selectedGrade">
                    <option value="Grade School">Grade School</option>
                    <option value="Middle School">Middle School</option>
                    <option value="High School">High School</option>
                    <option value="University">University</option>
                    <option value="Other">Other</option>
                </select>
                <br><br>

                <label for="name">Question : </label><br>
                <textarea type="text" name="question" id="question"></textarea>
                <br><br>

                <button>Add Forum</button>
            </form>
        </div>
        <br><br>

        <?php

            } else {
                
            }
        ?>

        
        @forelse($forum as $f)
            <div class="forum">
                <a href="/forum/{{ $f->id }}">
                    <div class="forum-item">
                        {{ $f->subject }}<br>
                        {{ $f->question }}
                    </div>
                </a>
                <a href="/forum/delete/{{ $f->id }}"><button>Delete Forum</button></a>
            </div>
            <br><br>    
        @empty
            <p>There are no Forum at the moments</p>
        @endforelse
    @endsection

    <script>
        function toggleForm() {
            var createForum = document.getElementById('createForum');
            createForum.style.display = (createForum.style.display === 'none') ? 'inline-block' : 'none';
        }
    </script>
</body>
</html>