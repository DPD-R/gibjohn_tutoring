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
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--- Styles to assign the font, and a centering tool --->
    <style>
        body {
            font-family: 'Consolas', monospace;
            overflow-y: hidden;
            overflow-x: hidden;
            margin: 0;
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
    <body class="antialiased">
    <div id="vanta"></div>
        <div class="relative center flex justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">

    <!--- Header, with SVG icon --->
        <div class="header white">
        <a href="{{ route('about-us') }}" class="white underline"><h1>GibJohn Tutoring <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
          <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
          <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
        </svg></h1></a>
        <p>We provide free, and fast-paced education, to help you get the grades you deserve.</p>
                    @if (Route::has('login'))
                <div class="hidden text-light fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="white underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="white underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 white underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <br>
        <p><i>Contact @ support@gibjohn.com</i></p>
        <p><i>Copyright @ GibJohn Tutoring 2022</i></p>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.topology.min.js"></script>
        <script>
        VANTA.TOPOLOGY({
          el: "#vanta",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 200.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.00,
          color: 0x9384,
          backgroundColor: 0x313131
        })
        </script>
        </div>

    </body>
</html>
