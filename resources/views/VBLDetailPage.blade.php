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

        {{ $curr->title }} - Chapter {{ $curr->chapter }}

        <br><br>
        <iframe width="560" height="315" src="{{ $curr->videoUrl }}" frameborder="0" allowfullscreen></iframe>
        <br><br>

        Desc :<br>
        {{ $curr->desc }}
        <br><br>

        @forelse($list as $l)
            <a href="/vbl/detail/{{ $l->headerId }}/{{ $l->chapter }}"><div class="list-item">
                Chapter {{ $l->chapter }}<br>
                {{ $l->title }}
            </div></a>
            <br><br>
        @empty
            <p>There are no other Chapters at the moments</p>
        @endforelse
    @endsection
</body>
</html>