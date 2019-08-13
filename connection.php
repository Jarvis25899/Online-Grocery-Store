<?php

$server="localhost";
$user="root";
$pass="";
$db="mp";

$db=mysqli_connect($server,$user,$pass,$db);

if(!$db){
	die("Connection Failed");
}

?>