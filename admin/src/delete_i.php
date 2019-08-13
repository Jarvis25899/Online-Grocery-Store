<?php

include "db.php";

$p_title=$_POST["ptitle"];

$sql="DELETE FROM `product` WHERE Product_title='$p_title'";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Item deleted successfully!!!</b>
                </div>";
            }
?>