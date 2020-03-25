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

<body  style="background-color:slategray;">
<header>
    <div class="top-nav container">
        <div class="logo">FitFit</div>
        <ul>
            <li><a href="/welcome">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </div> <!-- end top-nav -->

</header>

<img id="blankm1" src='\imagenes\MDVL.PNG' style=display:none />
<p></p>
<img id="blanka1" src='\imagenes\MDVL.PNG' style=display:none />
<p></p>
<img id="blankm2" src='\imagenes\MDVL.PNG' style=display:none />
<p></p>
<img id="blanka2" src='\imagenes\MDVL.PNG' style=display:none />

<div class="boxed1">

<form action='/order' >

    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#" onclick=picturemChickenm2()> Chicken</a>
            <a href="#" onclick=picturemRicem2()> Rice</a>
        </div>
    </div>


    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#" onclick=picturemChickenm2()> Chicken</a>
            <a href="#" onclick=picturemRicem2()> Rice</a>
        </div>

    </div>





    <div class="dropdown">

        <button class="dropbtn">Dropdown</button>

        <div class="dropdown-content">
            <a href="#">Chicken</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>


    <button type="submit"> </button>
</form>


</body>

</html>


<script type="text/javascript">

    function picturemChickenm2(){
        var pic = "imagenes\\mexicanafajita.png";
        document.getElementById(blanka1.id).src = pic.replace('10x10', '30x30');
        document.getElementById(blanka1.id).style.display='block';
        <?php

        include ('./..test.blade.php');
        db('chicken');


        ?>
    }

    function picturemRicem2(){
        var pic = "imagenes\\cards.png";
        document.getElementById(blanka1.id).src = pic.replace('10x10', '30x30');
        document.getElementById(blanka1.id).style.display='block';
    }

</script>







