<?php

include "connection.php";

$p_category=$_POST["pcat"];
$p_title=$_POST["ptitle"];
$p_price=$_POST["pprice"];
$p_desc=$_POST["pdesc"];
$p_keywords=$_POST["pkeyword"];
$p_image=$_POST["pimage"];
$hp=$_POST["hot"];
$discount=$_POST["discount"];

$sql="INSERT INTO `product_info` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `hot_product`, `discount_in_%`) VALUES (NULL, '$p_category', '$p_title', '$p_price', '$p_desc', '$p_image', '$p_keywords', '$hp', '$discount')";
$run_query=mysqli_query($db,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Inserted successfully!!!</b>
                </div>";
            }
?>