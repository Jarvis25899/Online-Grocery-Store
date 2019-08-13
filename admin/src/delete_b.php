<?php

include "db.php";

$brand=$_POST["bname"];

$sql="DELETE FROM `brands` WHERE Brand_title='$brand'";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Item deleted successfully!!!</b>
                </div>";
            }
?>