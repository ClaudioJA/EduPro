<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBL</title>
    <style>
        .list-item{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    @extends('Navbar')
    @section('content')
        <h1>VBL Detail</h1>

        <p>There are no Chapter yet</p><br>
        
        <?php
            if (auth()->check()){
                if (auth()->user()->userRole == "Admin") {
        ?>
            <a href="/vbldetail/create/{{ $headerId }}"><button>Add Chapter</button></a>
        <?php
                }
            }
        ?>
    @endsection
</body>
</html>