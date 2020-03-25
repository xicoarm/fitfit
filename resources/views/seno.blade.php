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


<div class="boxed1">
        @csrf

        <h1 class="text"> Ihre Bestellung </h1>

        <div class="tagseparate">
            @include('test')

            <b> <?php

                if(!isset($_SESSION['pricearray'])) {
                    die("error world");
                }

//                SESSION_START();
                $prices= $_SESSION["pricearray"];
            $prices= $_SESSION["pricearray"];
            $orders= $_SESSION["orderarray"];

                foreach($orders as $result) {
                    echo $result, '<br>';
                }

                echo '<br>';
                echo "Total price: "
                ?> </b>

            <b class="prices"> <?php

                $prices= $_SESSION["pricearray"];
                $orders= $_SESSION["orderarray"];

                foreach($prices as $result) {
                    echo $result, ' CHF <br>';
                }
                echo '<br>';
                echo array_sum($prices), ' CHF' ;
                ?>
            </b>

    </div>


    <br> </br>

    <br>
            <script src="https://js.stripe.com/v3/"></script>

        <form action="/charge" method="post" id="payment-form">
            @csrf


            <div class="form-style-8">
                <h2>Über Sie</h2>

                    <input name="vorname" type="text" placeholder="Vorname*" required />
                    <input name="nachname" type="text" placeholder="Nachname*" />
                    <input name="lieferadresse" type="text" placeholder="Lieferadresse*" />
                    <input name="stadt" type="text"  placeholder="Stadt*"/>
                    <input name="plz" type="text" placeholder="PLZ*"/>
                    <br>
                    <input name="email" type="email"  placeholder="Email" />
                    <input type="text" name="handynummer"  placeholder="Handynummer" />
                    <textarea placeholder="Kommentare" onkeyup="adjust_textarea(this)"></textarea>

            </div>


            <div class="form-style-8k">
                <h2>Bezahlung</h2>
                <br>

                <label for="card-element">
                    Kredit- oder Debitkarte (Maestro)
                </label>

                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
                <input class="button1" value="<?php echo array_sum($_SESSION['pricearray'])?>CHF Bezahlen" type="submit">
            </div>


</form>
</div>


</body>
</html>




<script>
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
    // Create a Stripe client.
    var stripe = Stripe('pk_test_dz7GxwE9sa1LHXsm1V9dg8JW003bwrS4se');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');

        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }





</script>

<?php

if(isset($_POST['vorname'])){

    $vorname= $_POST['vorname'];
    $nachname= $_POST['nachname'];
    $lieferadresse= $_POST['lieferadresse'];
    $stadt= $_POST['stadt'];
    $plz= $_POST['plz'];
    $email= $_POST['email'];
    $handynummer= $_POST['handynummer'];
}

?>
