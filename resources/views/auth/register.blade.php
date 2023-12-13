<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/css/style.css', "resources/css/sign.css"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Register</title>
</head>
<body>
    @extends('Navbar')
    @section('content')
    <form method="POST" class="account" action="{{ route('register') }}">
        @csrf
        <div class="account__wrapper">
            <h1>ARE YOU NEW HERE?</h1>
            <p>HI :) EDUPRO HERE!</p>
            <p>LET’S LEARN TOGETHER!</p>
            
        </div>
        <div class="account__wrapper">
            <input placeholder="Full Name" id="name" type="text" class="" name="name" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="account__wrapper">
            <input placeholder="Email Address" id="email" type="email" class="" name="email" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="account__wrapper">
            <input placeholder="Password" id="password" type="password" class="" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="account__wrapper">
            <input placeholder="Password Confirm" id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn">Register</button>
    </form>
    @endsection

    
</body>
</html>
