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

<body style="background-color:slategray; height: auto">
<header>
    <div class="top-nav container">
        <div class="logo">FitFit</div>

        @if (Route::has('login'))
            <div style="position:absolute; top: -5%; left: 75%" class="top-right links">
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





<div class="container">

    <form method="post" action="seno">
@csrf<h1 style="color: lightblue" class="text"> Erstellen Sie Ihren Wochenplan </h1>

{{--        <div class="boxed" style="background-color: slategray; border: 1px solid white;">--}}

        <h1 style="color: blue"> Tag 1 </h1>
        <div class="tagseparate">

            <select name="m1"id="m1" onchange="picturemChickenm2('m1', blankm1); myFunction('textm1', 'm1')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
             </select>

            <div class="im1">
                <img class='im1' id="blankm1" src='' style=display:none />   </div>

            <div class="textm1">
            <h1 id="textm1" style="display: initial" class="textm1" > </h1> </div>



            <select name="a1" id="a1" onchange="picturemChickenm2('a1', blanka1); myFunction('texta1', 'a1')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka1" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta1" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
      </div>


        <h1 style="color: blue"> Tag 1 </h1>
        <div class="tagseparate">

            <select id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('textm2', 'm2')" class="dropbtn1">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken lo que sea para ver Chicken lo que sea para ver como queda como queda (+1CHF) por lo que seaaaaaaaa</option>
                <option name="pasta" value="pasta">Pasta</option>
                <option value="carbonara">Carbonara</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im1">
                <img class='im1' id="blankm2" src='' style=display:none />   </div>

            <div class="textm1">
                <h1 id="textm2" style="display: initial" class="textm1" > </h1> </div>



            <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('texta2', 'a2')" class="dropbtn2">Dropdown>
                <option disabled selected="selected">Gericht 2</option>
                <option value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>

            <div class="im2">
                <img class='im2' id="blanka2" src='' style=display:none /> </div>

            <div class="texta1">
                <h1 id="texta2" style="display: initial" class="textm1" > </h1> </div>




            {{--        //tag1--}}
        </div>




      <div class="tagseparate">
            <h1> Tag 2 </h1>
            <select name="m2" id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('m1')" class="dropbtn">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>



            <div>
                <select name="a2" id="a2" onchange="picturemChickenm2('a2', blanka2); myFunction('a1')" class="dropbtn">Dropdown>
                    <option disabled selected="selected">Gericht 2</option>
                    <option value="mexicanafajita" >Chicken</option>
                    <option value="COMbo">combo</option>
                </select>
            </div>
        </div>   {{--        //tag2--}}


        <div class="tagseparate">
            <h1> Tag 3 </h1>
            <select name="m1" id="m1" onchange="picturemChickenm2('m1', blankm1); myFunction('m1')" class="dropbtn">Dropdown>
                <option disabled selected="selected">Gericht 1</option>
                <option name="mexicanafajita" value="mexicanafajita" >Chicken</option>
                <option value="COMbo">combo</option>
            </select>



            <div>
                <select name="a1" id="a1" onchange="picturemChickenm2('a1', blanka1); myFunction('a1')" class="dropbtn">Dropdown>
                    <option disabled selected="selected">Gericht 2</option>
                    <option value="mexicanafajita" >Chicken</option>
                    <option value="COMbo">combo</option>
                </select>
            </div>
        </div>   {{--        //tag2--}}




        <input type="submit" class="button1" value="Zur Kasse"/>






        </div>

        </form>
</div>
</body>
</html>
        <script type="text/javascript">

            function picturemChickenm2(val, blank) {
                var t = document.getElementById(val).value;
                var pic = "imagenes\\"+t+".png";
                document.getElementById(blank.id).src = pic.replace();
                document.getElementById(blank.id).style.display='block';
            }



            function myFunction(text, field) {

                if(document.getElementById(field).value == 'mexicanafajita'){

                    document.getElementById(text).innerText =
                        "Pro 480g: kCal 652, Carbs 73g, Eiweiss 37g, Fett 24g";

                    document.getElementById(text).style.display='initial';
            }


                if(document.getElementById(field).value == 'pasta'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 111," +
                        "Carbs 22g, " +
                        "Eiweiss 33g, " +
                        "Fett 33g";

                    document.getElementById(text).style.display='initial';
                }
                if(document.getElementById(field).value == 'COMbo'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 2222\n" +
                        "Carbs 44g\n" +
                        "Eiweiss 33g\n" +
                        "Fett 123g";

                    document.getElementById(text).style.display='initial';
                }
                if(document.getElementById(field).value == 'carbonara'){

                    document.getElementById(text).innerText =
                        "Pro 480g:\n" +"kCal 5432\n" +
                        "Carbs 44g\n" +
                        "Eiweiss 33g\n" +
                        "Fett 123g";

                    document.getElementById(text).style.display='initial';
                }






                // else{
                //     document.getElementById(text).style.display='none';
                // }
            }

        </script>






