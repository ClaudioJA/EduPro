<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/style.css', "resources/css/sign.css"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
@extends('Navbar')
@section('content')
    <form class="account" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="account__wrapper">
            <h1>ARE YOU NEW HERE?</h1>
            <p>HI :) EDUPRO HERE!</p>
            <p>LET’S LEARN TOGETHER!</p>
        </div>
        
        <div class="account__wrapper">
            <input placeholder="Email Address" id="email" type="email" class="" name="email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="account__wrapper">
            <input placeholder="Password" id="password" type="password" class="" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="account__wrapper account__wrapper--checkbox">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="account__wrapper">
            @if (Route::has('password.request'))
                <a class="btn--nav btn__small" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
@endsection

</body>
</html>

