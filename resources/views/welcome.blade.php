<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FitFit</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>







    <body style='background-color:aliceblue'>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <header>
            <div style="background-color: aliceblue ; border-width: 10px ;position: relative; padding-bottom: 25px; padding-top: 25px; padding-left: 50px; padding-right: 50px; width: 900px"  class="top-nav container">

                <div style="position: relative; top: 20%; color: black" class="logo">FitFit</div>

                <ul>

                    <li style=" font-size: 70%"><a style="color: black" href="#">Über uns</a></li>
                    <li style=" font-size: 70%"><a style="color: black" href="/shop">Shop</a></li>
                    <li style=" font-size: 70%"><a style="color: black" href="#">Wie funktioniert's?</a></li>
                    <li style=" font-size: 70%"><a style="color: black" href="#">blog</a></li>

                </ul>




            </div> <!-- end top-nav -->

        </header>


        <div class="container">

            <div style=" position: absolute; top: 0px" class="transbox">
                <p>Delivery fresh and stabil</p>
            </div>



            <img size="250%" src="imagenes\combo.png">
            <p style="color: black" class="section-description text-center">Alle unsere Produkte sind frisch gekocht und ohne Konservanten.</p>

        </div>

        <div class="container" style="background-color: #DDFEFE">

            <img style="width: 70%" src="imagenes/mdvl.png">

        </div>

{{--        <form class="container">--}}

{{--            <div class="text-center button-container">--}}
{{--                <a href="/shop-choice" class="button"> Wochenplan erstellen</a>--}}
{{--                <a href="#" class="button">On Sale</a>--}}
{{--            </div>--}}


{{--            <div class="products text-center">--}}
{{--                <div class="product">--}}
{{--                    <img size="100%" style="max-width: 100%; max-height: 100%; width: 600px; height: 300px" src="imagenes/wochenplan.png">--}}
{{--                    <a href="#"><div class="product-name">MacBook Pro</div></a>--}}
{{--                    <div class="product-price">$2499.99</div>--}}
{{--                </div>--}}

{{--            </div> <!-- end products -->--}}

{{--            <div class="text-center button-container">--}}
{{--                <a href="#" class="button">View more products</a>--}}
{{--            </div>--}}

{{--        </form> <!-- end container -->--}}




        <div class="row">
            <div class="column" style="background-color:#aaa;">
                <a href="/shop-choice"><div class="button"> Wochenplan erstellen </div></a>
                <img style="width: 600px; height: 300px" src="imagenes/wochenplan.png">
            </div>

            <div class="column" style="background-color:#bbb;">
                <a href="#"><div class="button">a la carte</div></a>
                <div class="product-price">$2499.99</div>
            </div>
        </div>
















    <div class="blog-section">

        <div class="container">
            <h1 class="text-center">Lieferung </h1>

            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

            <div class="blog-posts">
                <div class="blog-post" id="blog1">
                    <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Erfahrungen Sasha...</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post" id="blog2">
                    <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Foto Küche oder mitarb</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post" id="blog3">
                    <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">ärztlich iöbis</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
            </div> <!-- end blog-posts -->
        </div> <!-- end container -->
    </div> <!-- end blog-section -->


    <footer style="background-color: lightgray">
        <div class="footer-content container">
            <div class="made-with">With <i class="fa fa-heart"></i> by FitFit</div>
            <ul>
                <li>Follow Me:</li>
                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div> <!-- end footer-content -->
    </footer>


    </body>
</html>

