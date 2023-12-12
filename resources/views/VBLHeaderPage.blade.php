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
        <h1>VBL List</h1>

        <?php
            if (auth()->check()){
                if (auth()->user()->userRole == "Admin") {
        ?>
            <a href="/vbl/create"><button>Add Course</button></a><br><br>
        <?php
                }
            }
        ?>
        

        @forelse($vbl as $v)
            {{ $v->name }} <br>
            by {{ $v->teacherName }}<br>
            <a href="/vbl/detail/{{ $v->id }}/1"><button>Detail</button></a>
            <br><br>    
        @empty
            <p>There are no VBL at the moments</p>
        @endforelse
    @endsection
</body>
</html>