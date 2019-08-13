<?php

include "db.php";

$brand=$_POST["bname"];

$sql="INSERT INTO `brands` (`Brand_id`, `Brand_title`) VALUES (NULL, '$brand')";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Inserted successfully!!!</b>
                </div>";
            }

?>