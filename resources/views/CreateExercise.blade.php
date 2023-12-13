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
        
    <h1>Create Exercise</h1>

    <div id="createForm" class="createForm">
        <form action="{{ route('create-exercise') }}" method="POST">
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            <label for="name">Subject : </label><br>
            <select id="selectedSubject" name="selectedSubject">
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

            <label for="name">Title : </label><br>
            <textarea type="text" name="title" id="title"></textarea>
            <br><br>

            <button>Create</button>
        </form>

        @foreach($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
    </div>

    @endsection
</body>
</html>