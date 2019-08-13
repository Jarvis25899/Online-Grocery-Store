<?php

session_start();
unset($_SESSION["aid"]);
unset($_SESSION["name"]);
header("location:login.php");

?>