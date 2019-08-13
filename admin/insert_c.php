<?php

include "connection.php";

$category=$_POST["cname"];
$file=$_POST["fname"];

$sql="INSERT INTO `categorie_info` (`cat_id`, `cat_title`, `file_name`) VALUES (NULL, '$category', '$file')";
$run_query=mysqli_query($db,$sql);
            if($run_query){
                echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Inserted successfully!!!</b>
                </div>";
            }
?>