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
    <form method="post" action="test">
        @csrf
        <select name="m1" id="m1" onchange="picturemChickenm2('m1', blankm1); myFunction('m1')" class="dropbtn">Dropdown>
            <option disabled selected="">1tag</option>
            <option value="mexicanafajita" >Chicken</option>
            <option value="COMbo">combo</option>
        </select>


        <select name="a1" id="a1" onchange="picturemChickenm2('a1', blanka1); myFunction('a1')" class="dropbtn">Dropdown>
            <option disabled selected="selected">1tag</option>
            <option value="mexicanafajita" >Chicken</option>
            <option value="COMbo">combo</option>
        </select>


        <select name="m2" id="m2" onchange="picturemChickenm2('m2', blankm2); myFunction('m2')" class="dropbtn">Dropdown>
            <option disabled selected="selected">1tag</option>
            <option value="mexicanafajita" >Chicken</option>
            <option value="COMbo">combo</option>
        </select>


        <input type="submit" value="submit"/>
    </form>
