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
        <section class="teach-container">
            <div class="teach__cta">
                <h1>Let’s Study Now!</h1>
                <p>The more thorough the preparation, the calmer the assignment and examination will be!</p>
                <img src="/images/teach_img.png" alt="">
            </div>
            <form class="exercise-form" id="filterForm">
                <select id="filter" name="selectedSubject">
                    <option value="">None</option>
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
            
                <button type="button" onclick="filterExercises()">Filter</button>
            </form>
            <?php
                if (auth()->check()){
                    if (auth()->user()->userRole == "Admin") {
            ?>
                <a href="/exercise/create" class="btn btn__small">Create Course</a>
            <?php
                    }
                }
            ?>
            <div class="teach-content">
                <h2 class="teach-content__heading">EXERCISE BASED LEARNING</h2>
                <div class="teach-content__container">
                    @forelse ($exercise as $e)
                        <div class="card">
                            <h3>{{ $e->subject }} - {{ $e->title }}</h3>
                            <a href="/exercise/question/{{ $e->id }}" class="btn--details">Try Exercise</a>
                            <?php
                                if (auth()->check()){
                                    if (auth()->user()->userRole == "Admin") {
                            ?>
                                <a href="/exercise/delete/{{ $e->id }}">Delete Course</a>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    @empty
                </div>
                    <p class="card--empty">There are no Exercise available currently</p>
                @endforelse
            </div>
        </section>
        
    @endsection

    <script>
        function filterExercises() {
            var selectedSubject = document.getElementById('filter').value;
            var url = '/exercise/' + encodeURIComponent(selectedSubject);
            window.location.href = url;
        }
    </script>
</body>
</html>