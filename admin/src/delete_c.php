<?php

include "db.php";

$category=$_POST["cname"];

$sql="DELETE FROM `categories` WHERE Category_title='$category'";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Item deleted successfully!!!</b>
                </div>";
            }
?>