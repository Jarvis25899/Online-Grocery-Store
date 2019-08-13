<?php

include "db.php";

$category=$_POST["cname"];

$sql="INSERT INTO `categories` (`Category_id`, `Category_title`) VALUES (NULL, '$category')";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Inserted successfully!!!</b>
                </div>";
            }
?>