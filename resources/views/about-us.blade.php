<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GibJohn Tutoring</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--- Styles to assign the font, and a centering tool --->
    <style>
        body {
            font-family: 'Consolas', monospace;
            background: rgb(222,222,222);
			background: radial-gradient(circle, rgba(222,222,222,1) 0%, rgba(246,246,246,1) 100%);
        }

        .white {
            color: white;
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%) 
        }

        #vanta {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>

    <!--- Background SVG for animations --->
    </head>
    <!--- Centering for all elements --->
    <body>

    <!--- Header, with SVG icon --->
    <div id="vanta"></div>
        <div class="header dark center">
        	<h2>GibJohn - About us</h2>

        	<p>Our goal is to help all students make realistic goals, and achieve them. We plan on doing this by</p>
        	<p>creating easy to follow revision guides, that are more effective than traditional revision methods.</p>
        	<p>We also want to create a stronger student/teacher relationship, that allows for better communication,</p>
        	<p>which will in turn allow both parties to improve upon their weaknesses in topics, and also develop their</p>
        	<p>strengths.</p>
        	<br>
        	<p>For further questions/support, please contact us using the button below!</p>

        	<a href="{{ route('contact') }}"><button type="button" class="btn btn-outline-dark">Contact us</button></a>
        	<p class="pt-3"><small>Or contact us at <b>"support@gibjohn.com"</b>, thank you!</small></p>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
            <script>
            VANTA.BIRDS({
            el: "#vanta",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            backgroundColor: 0xffffff,
            color1: 0xacacac,
            color2: 0xbebebe,
            quantity: 4.00
            })
            </script>
        </div>

    </body>
</html>
