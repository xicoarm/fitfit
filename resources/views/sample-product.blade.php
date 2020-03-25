<?php

$conn = new mysqli("localhost", "root", "", "db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT name FROM produccts where name='$product'");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo view('welcome');

}

?>



    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>


    <link rel="stylesheet" href="<?php echo e(asset('css/products.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">


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



<body style="background-color:#DDFEFE ">


    <main class="container" style="background-color: #DDFEFE; height: 80%;">

        <!-- Left Column / Headphones Image -->
        <!-- Left Column / Headphones Image -->

        <div class="left-column">
            <img data-image="klein" src="/imagenes/mexicanafajita.jpg" alt="Mountain">
            <img data-image="klein" src="imagenes/combo.png" alt="">
            <img data-image="red" class="active" src="images/red.png" alt="">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Muskelaufbau</span>
                <h1>Pasta mit Vegi</h1>
                <p>vale</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product Color -->

                <!-- Cable Configuration -->
                <div class="cable-config">
                    <span style="color: black">Size</span>

                    <div class="cable-choose">
                        <button data-image="klein" name="klein" value="klein" id="klein" >klein</button>
                        <button>medium</button>
                        <button>gross </button>
                    </div>

                    <a href="#">Über Alergien etc. hier</a>
                </div>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>148$</span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
    </main>


</body>



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


</html>


    <script>
        $(document).ready(function() {

            $('.color-choose input').on('click', function() {
                var headphonesColor = $(this).attr('data-image');

                $('.active').removeClass('active');
                $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
                $(this).addClass('active');
            });

        });

    </script>
