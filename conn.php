<?php



$conn = new mysqli("localhost","root","","mydb");

if($conn->connect_error){
    echo $conn->error;
}


?>

