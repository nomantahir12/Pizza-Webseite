<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "mypizzawebsite";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if($conn == false){
    die('Error: Cannot connect');
}

?>




