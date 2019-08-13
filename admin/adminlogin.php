<?php 

include "connection.php";

session_start();

if(isset($_POST["admin_login"])){
    $username=mysqli_real_escape_string($db,$_POST["admin_username"]);
    $password=$_POST["admin_password"];
    $sql="SELECT * FROM admin_info WHERE username='$username' AND password='$password'";
    $run_query=mysqli_query($db,$sql);
    $count=mysqli_num_rows($run_query);
    if($count==1){
        $row=mysqli_fetch_array($run_query);
        $_SESSION["aid"]=$row["id"];
        $_SESSION["name"]=$row["username"];
        echo "sgd";
    }
}

?>