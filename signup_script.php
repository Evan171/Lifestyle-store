<?php

require 'common.php';

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  /*$contact = mysqli_real_escape_string($con, $contact);*/

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{11}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m= "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } /*else if (!preg_match($regex_num, $contact)) {
    $m= "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } */else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
  }
/* 
 $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
 $str=$_POST['password'];
 $password=md5($str);
 $name=mysqli_real_escape_string($con,$_POST['name']);
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $contact=mysqli_real_escape_string($con,$_POST['contact']);
 $city=$_POST['city'];
 $address=$_POST['address'];
 $signup_query="select id from users where email= '$email'";
 $signup_query_result=mysqli_query($con,$signup_query) or die(mysqli_error($con));
 if (mysqli_num_rows($signup_query_result)> 0){
	 header('location=signup.php?email_error=email already registered;');
 }else{
	 $signup_ok="insert into users('name','email','password','contact','city','address') values($name,$email,$password,$contact,$city,$address);";
	 $signup_submit=mysqli_query($con,$signup_ok) or die(mysqli_error($con));
	 $_SESSION['email']=$email;
	 $_SESSION['id']=mysqli_insert_id($con);
	 header('location:products.php');
 }
 */
 ?>