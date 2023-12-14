<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBL</title>
    @vite(['resources/css/style.css',"resources/css/learning.css", "resources/js/animation.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('content')
        <section class="teach-container">
            <div class="teach__cta">
                <h1>VBL Detail</h1>
                <p>There are no Chapter yet</p><br>
                
                <?php
                    if (auth()->check()){
                        if (auth()->user()->userRole == "Admin") {
                ?>
                    <a href="/vbldetail/create/{{ $headerId }}" class="btn btn__small">Add Chapter</a>
                <?php
                        }
                    }
                ?>
            </div>
        </section>
    @endsection
</body>
</html>