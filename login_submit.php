<?php
 require 'common.php';
 $email=$_POST['email'];
 $email=mysqli_real_escape_string($con,$_POST['email']);
 
 $password=$_POST['password'];
 $password=mysqli_real_escape_string($con,$_POST['$password']);
 $password=MD5($password);
 
 $user_login_query="select email,password from users WHERE email='$email' and password='$password'";
 $user_login_submit=mysqli_query($con,$user_login_query) or die(mysqli_error($con));
 $count=mysqli_num_rows($user_login_submit);
 if($count==0){
	 header('location:login.php?email_error=invalid email id');
 } else{
	 mysqli_fetch_array($user_login_submit);
	 $_SESSION['email']='$email';
	 $_SESSION['id']=mysqli_insert_id($con);
	 header('location:products.php');
 }
 
?>