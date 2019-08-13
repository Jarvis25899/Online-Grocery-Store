<?php

include "db.php";

$p_category=$_POST["pcat"];
$p_brand=$_POST["pbrand"];
$p_title=$_POST["ptitle"];
$p_price=$_POST["pprice"];
$p_desc=$_POST["pdesc"];
$p_keywords=$_POST["pkeyword"];
$p_image=$_POST["pimage"];

$sql="INSERT INTO `product` (`Product_Id`, `Product_category`, `Product_brand`, `Product_title`, `Product_price`, `Product_desc`, `Product_image`, `Product_keywords`) VALUES (NULL, '$p_category', '$p_brand', '$p_title', '$p_price', '$p_desc', '$p_image', '$p_keywords')";
$run_query=mysqli_query($con,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Inserted successfully!!!</b>
                </div>";
            }
?>