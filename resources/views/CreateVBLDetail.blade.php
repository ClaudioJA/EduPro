<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBL Detail</title>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>Create VBL Chapter</h1>

        <div id="createForm" class="createForm">
            <form action="{{ route('create-chapter') }}" method="POST">
                <input type="hidden" name="_token" value='{{ csrf_token() }}'>

                <input type="hidden" name="headerId" value='{{ $headerId }}'>

                <label for="name">Chapter Title : </label><br>
                <textarea type="text" name="title" id="title"></textarea>
                <br><br>

                <label for="name">Chapter Number : </label><br>
                <textarea type="number" name="chapter" id="chapter"></textarea>
                <br><br>

                <label for="name">Video Url : </label><br>
                <textarea type="text" name="videoUrl" id="videoUrl"></textarea>
                <br><br>

                <label for="name">Desc : </label><br>
                <textarea type="text" name="desc" id="desc"></textarea>
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