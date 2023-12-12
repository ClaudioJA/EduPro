<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>Exercise</h1><br>

        <form id="filterForm">
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

        @forelse ($exercise as $e)
            {{ $e->subject }}<br>
            <a href="/exercise/question/{{ $e->id }}"><button>Try</button></a>
            <br><br>
        @empty  
            <p>There are no Exercise available currently</p>
        @endforelse
        
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