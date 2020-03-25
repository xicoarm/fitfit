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

<img class='im1' id="blankm1" src='' style=display:none />
<p></p>
<img class='ia1'id="blanka1" src='' style=display:none />
<p></p>
<img class='im2'id="blankm2" src='' style=display:none />
<p></p>
<img class='ia2'id="blanka2" src='' style=display:none />


<div class="boxed1">
    @csrf

    <h1 class="text"> Success</h1>
    <div class="tagseparate">
            <b>
            <?php


            if(isset($_POST["vorname"])){
                $date = date('mdYHis', time());
                echo "Bestellungsnummer: ";
            echo $date;

            }
            ?>

        </b>
        <br>

        <br></br>
        <b>
            <?php if(isset($_POST["vorname"])){ echo $_POST["vorname"];} ?>

        </b>
        <b>
            <?php if(isset($_POST["nachname"])){ echo $_POST["nachname"];} ?>
<p> </p>
        </b>
        <b>
            <?php if(isset($_POST["lieferadresse"])){ echo $_POST["lieferadresse"];} ?>,
                <p> </p>
        </b>

        <b>
            <?php if(isset($_POST["stadt"])){ echo $_POST["stadt"];} ?>
                <p> </p>
        </b>
        <b>
            <?php if(isset($_POST["plz"])){ echo $_POST["plz"];} ?>
                <p> </p>
        </b>
        <b>
            <?php if(isset($_POST["email"])){ echo $_POST["email"];} ?>

        </b>

        <b>
            <?php if(isset($_POST["handynummer"])){ echo $_POST["handynummer"];} ?>

        </b>

    </div>

</div>
</body>
</html>





<?php


require_once(__DIR__.'/../../../vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_Nfa56xcqzEHcvB7UFC8W4nFB00PTrNqSqG');

if(isset($_POST['stripeToken'])) {
    session_start();
    $prices= $_SESSION["pricearray"];
    $orders= $_SESSION["orderarray"];

    $priceX100=(array_sum($prices) * 100);

$token= $_POST["stripeToken"];

}

$charge= \Stripe\Charge::create([
    "amount" => $priceX100,
    "currency" => "chf",
    "description" => "versand......",
    "source" => $token
]);



echo "<pre>, print_r($charge),</pre>";




    ?>
