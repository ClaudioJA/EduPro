<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBL</title>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>Create VBL</h1>

        <div id="createForm" class="createForm">
            <form action="{{ route('create-course') }}" method="POST">
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>

                <label for="name">Title : </label><br>
                <textarea type="text" name="title" id="title"></textarea>
                <br><br>

                <label for="name">Instructor Name : </label><br>
                <textarea type="text" name="instructor" id="instructor"></textarea>
                <br><br>

                <button>Create</button>
            </form>

            @foreach($errors->all() as $err)
                {{ $err }} <br>
            @endforeach
        </div>
        <br><br>
        
    @endsection
</body>
</html>