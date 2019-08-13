<?php

include "connection.php";

$title=$_POST["ptitle"];
$price=$_POST["pprice"];

$sql="UPDATE product_info SET product_price='$price' WHERE product_title='$title'";
$run_query=mysqli_query($db,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Updated successfully!!!</b>
                </div>";
            }
?>