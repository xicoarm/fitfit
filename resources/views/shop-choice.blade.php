<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSS Grid Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


</head>


















</head>



<style>
    html, body {
        background-color: lightskyblue;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }


    .position-ref {
        position: absolute;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
        position: absolute;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
















<body style="background-color:grey;">
<header>
    <div class="top-nav container">
        <div class="logo">FitFit</div>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/welcome') }}">Mein Profil</a>
                    <a href="{{ url('/logout') }}">Logout</a>

                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <ul>
            <li><a href="/welcome">Home</a></li>
            <li><a href="/shop-choice">Shop</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </div> <!-- end top-nav -->




</header>



</body>

</html>






















        <body style="background-color:grey;">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <div class="flex-container">

            <div class="boxed">
                <h1> Erstellen Sie Ihren Wochenplan</h1>
                <h2> Mahlzeiten an einem Tag?</h2>

           <br></br>
                <a href="{{ url('/nose') }}" class="button" >2</a>
                <a href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button" >3</a>
                <a href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button" >4</a>
                <a href="{{ url('/5-Tage-Plan-3-Gerichte-am-Tag') }}" class="button" >5</a>

            </div>



            <div class="boxedCarte">
                <h1>Essen À la Carte</h1>

                <a href="{{ url('/shop') }}" class="button" >zum Shop</a>
            </div>
        </div>



        </body>
</html>
