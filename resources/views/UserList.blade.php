<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <style>
        div{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    @forelse($user as $u)
    <div>
        Name : {{ $u->name }} <br>
        Email : {{ $u->email }} <br>
        Password : {{ $u->password }} <br>
        <a href="/userlist/delete/{{ $u->id }}">Delete User</a>
        
    </div>
    <br><br>
    @empty
        <p>No Data Existed</p>
    @endforelse
</body>
</html>