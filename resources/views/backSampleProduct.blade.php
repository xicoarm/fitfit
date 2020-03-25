<?php

$conn = new mysqli("localhost", "root", "", "db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT name FROM produccts where name='$product'");
$row = mysqli_fetch_assoc($result);

if ($row) {

    return 1;
    echo view('sample-product')->with('product', $product);

}
else{
return 0;
}
?>

{{--<script> window.location = "/shop";</script>--}}
