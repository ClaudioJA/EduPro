<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/style.css', "resources/js/animation.js"])

</head>
<body>
        <header>
            <nav class="navbar">
                <img class="logo" src="/images/edupro_logo.png" alt="">
                <ul class="nav__list">
                    <li><a href="/">Home</a></li>
                    <li class="nav__dropdown--bar">
                        <div class="nav__dropdown--link">
                            <a>Study Materials</a>
                            <img src="/images/dropdown_arrow.png" alt="">
                        </div>
                        <ul class="nav__dropdown" data-hidden="true">
                            <li><a href="">Live Teaching</a></li>
                            <li><a href="">Private Tutor</a></li>
                            <li><a href="/vbl">Video Based Learning</a></li>
                        </ul>
                    </li>
                    <li><a href="/forum">Forum</a></li>
                </ul>
                <div class="nav__profile">
                    @auth
                        <img class="nav__profile--img" src="/images/profile_icon.png" alt="Profile">
                        <p>{{$user->name}}</p>
                        <a href="/logout" class="btn--logout">Log Out</a>
                    @else
                        <a href="{{route('login')}}" class="btn--nav">Login</a>
                        <a href="{{route('register')}}" class="btn--nav">Register</a>
                    @endauth
                </div>
            </nav>
        </header>
    @yield('content')
</body>
</html>