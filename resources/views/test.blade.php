
<?php

if(isset($_POST['m1']) and isset($_POST['a1']) and !isset($_POST['m2'])
and !isset($_POST['a2'])) {
    SESSION_START();

    $_SESSION['valm1'] = $_POST['m1'];
    $valm1 = $_SESSION["valm1"];


    $_SESSION['vala1'] = $_POST['a1'];
    $vala1 = $_SESSION["vala1"];

//    $_SESSION['valm2']= $_POST['m2'];
//    $valm2 = $_SESSION["valm2"];
//
//    $_SESSION['vala2']= $_POST['a2'];
//    $vala2 = $_SESSION["vala2"];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db";


    $pricearray = [];
    $orderarray = [];

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($result = $conn->query("SELECT price, name FROM produccts where name='$valm1'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($orderarray, $valm1);
            array_push($pricearray, $news['price']);
        }
    }


    if ($result = $conn->query("SELECT price FROM produccts where name='$vala1'")) {

        while ($news = mysqli_fetch_assoc($result)) {
            array_push($orderarray, $vala1);
            array_push($pricearray, $news['price']);

        }
    }


    $conn->close();

    $_SESSION['pricearray'] = $pricearray;
    $_SESSION['orderarray'] = $orderarray;

//    header("Refresh:0; url=seno");
}

?>


