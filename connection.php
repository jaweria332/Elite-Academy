<?php
$servername="localhost";
$username="root";
$password=""; 
$dbname="elite_academy";

//establishing connection
$conn=mysqli_connect($servername, $username, $password,$dbname);
if($conn){
    echo "connection is open now";
}
else{
    echo "Sorry! connection failed";
    die("connection failed because".mysqli_connect_error());
}
?>

