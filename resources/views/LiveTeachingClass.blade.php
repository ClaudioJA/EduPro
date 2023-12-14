<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Teaching Class</title>
    
    @vite(['resources/css/style.css',"resources/css/liveteaching.css", "resources/js/animation.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('content')
    <section class="teaching">
        <div class="teaching__cta">
            <h1>LIVE TEACHING</h1>
            <p>The learning experience you are looking for can start here! Come on, start learning directly with a reliable tutor with EduPro!</p>
            <img src="/images/live_teaching_cta.png" alt="">
        </div>
        <div class="teaching__container">
            <h2>FREE EDUPRO CLASSES EVERYDAY</h2>
            <img src="/images/live_teaching_unavailable.png" alt="">
            <p>No upcoming free live class</p>
            <p>Please check in for further updates.</p>
        </div>
    </section>
        
    @endsection
</body>
</html>