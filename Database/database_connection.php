<?php

$servername = "localhost";
$username="root";
$password= "";
$database = "food_delivery";

$conn = mysqli_connect($servername,$username,$password,$database) or die("failed to connect:" .mysqli_connect_error());

?>