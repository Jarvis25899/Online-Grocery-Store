<?php 

$servername="localhost";
$username="root";
$password="";
$db="grocerry store";

//create connection
$con=mysqli_connect($servername,$username,$password,$db);

//check connection
if(!$con){
    die("Connection Failed: " . mysqli_connect_error());
}

?>