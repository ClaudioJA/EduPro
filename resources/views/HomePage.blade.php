<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <style>
        .mainBanner{
            width: 100%;
            background-color: cyan;
            height: 40vw;
            display: flex;
        }

        .mainBanner-content{
            width: 50%;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content{
            width: 75%;
            margin-left: 12.5%;
            background-color: yellow;
            height: 40vw;
        }

        .content-row{
            /* width: 100%; */
            background-color: greenyellow;
            padding-top: 8%;
            padding-left: 8%;
            padding-right: 8%;
            display: flex;
            justify-content: space-evenly;
        }

        .content-row-banner{
            width: 85%;
            background-color: red;
            border-radius: 1%;
            height: 20vw;
        }

        .content-row-item{
            width: 23%;
            background-color: lightcyan;
            border-radius: 5%;
            height: 20vw;
        }

        .content-row-item-upper{
            width: 100%;
            height: 50%;
            /* background-color: blueviolet; */
            border-top-left-radius: 5%;
            border-top-right-radius: 5%;
        }

        .content-row-item-bottom{
            width: 100%;
            height: 50%;
            background-color: lightgray;
            border-bottom-left-radius: 5%;
            border-bottom-right-radius: 5%;
            box-sizing: border-box;
            padding: 1vw;
        }
    </style>
</head>
<body>
    @extends('Navbar')
    @section('title', 'Homepage')
    @section('content')
    
    <div class="mainBanner">
        <div class="mainBanner-content">
            <div class="mainBanner-content-inner">
                <p>Test</p>
                <button>Ini Button</button>
            </div>
        </div>
        <div class="mainBanner-content">
            Ini Gambar
        </div>
    </div>

    <div class="content">
        <div class="content-row">
            <div class="content-row-item">
                <div class="content-row-item-upper">
                    Ini Gambar
                    <img src="" alt="">
                </div>
                <div class="content-row-item-bottom">
                    <a href="/vbl"><button>VBL</button></a>
                </div>
            </div>

            <div class="content-row-item">
                <div class="content-row-item-upper">
                    Ini Gambar
                    <img src="" alt="">
                </div>
                <div class="content-row-item-bottom">
                    Test
                </div>
            </div>

            <div class="content-row-item">
                <div class="content-row-item-upper">
                    Ini Gambar
                    <img src="" alt="">
                </div>
                <div class="content-row-item-bottom">
                    Test
                </div>
            </div>
        </div>

        <div class="content-row">
            <div class="content-row-banner">

            </div>
        </div>
    </div>

    @endsection
</body>
</html>