<?php

$servername="localhost";
$username="root";
$password="";
$dbname="parmar";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){

    die("connection failed:".mysqli_connect_error());
}

?>

