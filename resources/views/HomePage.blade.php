<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/edupro_logo.png" type="image/x-icon">
    <title>EduPro | Homepage</title>
    @vite(['resources/css/style.css', "resources/css/homepage.css"])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    @extends('Navbar')
    @section('title', 'Homepage')
    @section('content')
    
    <section class="banner">
        <div class="banner__wrapper">
            <h1>Educational Online Courses</h1>
            <p>Let's start with a free class!</p>
            <a href="/vbl" class="btn--details">Join Our Class</a>
        </div>
        <img class="banner__img" src="images/girl_studying_online.png" alt="Girl Studying Image">
    </section>
    <section class="main">
        <div class="triple">
            <h2 class="triple__heading">Check Out Our Educational Features</h2>
            <div class="triple__wrapper">
                <div class="triple__content">
                    <img src="images/video_based_learning.png" alt="">
                    <h3>Video Based Learning</h3>
                    <p>A remote training method that relies on live or prerecorded video to teach new skills and knowledge</p>
                    <a href="/vbl" class="btn--details">More Details</a>
                </div>
                <div class="triple__content">
                    <img src="images/live_teaching_session.png" alt="">
                    <h3>Live Teaching Session</h3>
                    <p>A remote training method that relies on live or prerecorded video to teach new skills and knowledge</p>
                    <a href="" class="btn--details">More Details</a>
                </div>
                <div class="triple__content">
                    <img src="images/private_tutor_exercises.png" alt="">
                    <h3>Private Tutor Exercises</h3>
                    <p>Distance training method by doing practice questions and quizzes to teach new skills and knowledge</p>
                    <a href="" class="btn--details">More Details</a>
                </div>
            </div>
        </div>
        <div class="promo">
            <img src="images/promo_homepage.png" alt="">
        </div>
        <div class="triple">
            <h2 class="triple__heading">What They Said About EduPro</h2>
            <div class="triple__wrapper">
                <div class="triple__content">
                    <img src="images/high_school.png" alt="">
                    <p>“ The learning videos are complete, so that the material that has never been taught in class can be understood clearly. ”</p>
                    <h3>Study Packaged Used:</h3>
                    <p>EDUPRO HIGH SCHOOL</p>
                </div>
                <div class="triple__content">
                    <img src="images/middle_school.png" alt="">
                    <p>“ The learning videos are complete, so that the material that has never been taught in class can be understood clearly. ”</p>
                    <h3>Study Packaged Used:</h3>
                    <p>EDUPRO MIDDLE SCHOOL</p>
                </div>
                <div class="triple__content">
                    <img src="images/elementary.png" alt="">
                    <p>“ The learning videos are complete, so that the material that has never been taught in class can be understood clearly. ”</p>
                    <h3>Study Packaged Used:</h3>
                    <p>EDUPRO ELEMENTARY</p>
                </div>
            </div>
        </div>
        <div class="contact">
            <img src="images/contact_homepage.png" alt="">
            <div class="contact__wrapper">
                <p>Any questions?</p>
                <p>Ask via chat to the EduPro Consultant</p>
                <a href="" class="btn--details">Contact Us</a>
            </div>
        </div>
    </section>


    @endsection
</body>
</html>