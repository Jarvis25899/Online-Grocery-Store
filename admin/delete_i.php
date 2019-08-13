<?php

include "connection.php";

$p_title=$_POST["ptitle"];

$sql="DELETE FROM `product_info` WHERE product_title='$p_title'";
$run_query=mysqli_query($db,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Deleted successfully!!!</b>
                </div>";
            }
?>