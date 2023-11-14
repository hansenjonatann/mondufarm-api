<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "mondufarm";

$conn = mysqli_connect($server , $username , $password , $database);

if($conn) {
    echo "Database terhubung dengan server";
}


?>