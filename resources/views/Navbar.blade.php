<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        .hidden {
            display: none;
        }

        .navbar{
            background-color: lightblue;
            padding : 20px;
        }

        .materialButtons{
            margin-left: 10%;
            position: absolute;
        }
    </style>
</head>
<body>

    <div class="navbar">

        {{-- Logo --}}
        <img src="" alt="">Logo Here

        {{-- Button --}}
        <button onclick="">Home</button>
        <button onclick="toggleButtons()">Study Material</button>
        <button onclick="">Forum</button>

        @auth
            <a href="/logout">Log Out</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endauth
    </div>

    <div id="materialButtons" class="hidden materialButtons">
        <button>Live Video Class</button><br>
        <button>Video Based Learning</button>
    </div>
    
    @yield('content')

    <script>
        function toggleButtons() {
            var materialButtons = document.getElementById('materialButtons');
            materialButtons.style.display = (materialButtons.style.display === 'none') ? 'inline-block' : 'none';
        }
    </script>
</body>
</html>