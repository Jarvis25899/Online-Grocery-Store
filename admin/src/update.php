<?php

include "db.php";

$title=$_POST["ptitle"];
$price=$_POST["pprice"];

$sql="UPDATE product SET Product_price='$price' WHERE Product_title='$title'";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Updated successfully!!!</b>
                </div>";
            }
?>