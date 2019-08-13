<?php 
include "connection.php";
session_start();
if(isset($_POST['userlogin'])){
	$email_login=mysqli_real_escape_string($db,$_POST['email']);
	$password_login=md5($_POST['password']);
	$query="SELECT * FROM user_info WHERE email='$email_login' AND password='$password_login'";
	$info=$db->query($query);
	if($info->num_rows==1){
		$row=mysqli_fetch_array($info);
		$_SESSION["uid"]=$row["user_id"];
		$_SESSION["name"]=$row["user_name"];
		echo "true";
	}
}

if(isset($_POST['userregister'])){
   	$username=$_POST['username'];
   	$email_reg=mysqli_real_escape_string($db,$_POST['email']);
	$password_reg=md5($_POST['password']); 
	$phone=$_POST['phone'];
	$uc = preg_match('@[A-Z]@', $_POST['password']);
	$lc = preg_match('@[a-z]@', $_POST['password']);
	$nc = preg_match('@[0-9]@', $_POST['password']);
	if($uc || $strlen($_POST['password']) < 10){
		echo "passfail";
	}
	elseif (!filter_var($email_reg,FILTER_VALIDATE_EMAIL)) {
		echo "emailfail";
	}
	else{
	$insert="INSERT INTO user_info(`user_name`,`email`, `password`, `mobile`) VALUES ('$username','$email_reg','$password_reg','$phone')";
	$info=$db->query($insert);
	if($info){
		echo "true";
	}
}
}

 ?>