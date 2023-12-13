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
        
    <h1>Add Question</h1>

    <div id="createForm" class="createForm">
        <form action="{{ route('create-question') }}" method="POST">
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            <input type="hidden" name="exerciseId" value='{{ $id }}'>

            <label for="name">Question : </label><br>
            <textarea type="text" name="question" id="question"></textarea>
            <br><br>

            <label for="name">Option A : </label><br>
            <input type="text" name="optionA" id="optionA"> 
            <br><br>

            <label for="name">Option B : </label><br>
            <input type="text" name="optionB" id="optionB"> 
            <br><br>

            <label for="name">Option C : </label><br>
            <input type="text" name="optionC" id="optionC"> 
            <br><br>

            <label for="name">Option D : </label><br>
            <input type="text" name="optionD" id="optionD"> 
            <br><br>

            <label for="name">Correct Answer : </label><br>
            <label for="option1">
                <input type="radio" id="optionA" name="correctOption" value="optionA"> Option A<br>
            </label>
            <label for="option1">
                <input type="radio" id="optionB" name="correctOption" value="optionB"> Option B<br>
            </label>
            <label for="option1">
                <input type="radio" id="optionC" name="correctOption" value="optionC"> Option C<br>
            </label>
            <label for="option1">
                <input type="radio" id="optionD" name="correctOption" value="optionD"> Option D<br><br>
            </label>
            
            <button>Create</button>
        </form>
        <br>

        @foreach($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
    </div>

    @endsection
</body>
</html>