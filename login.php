<?php 
require_once 'common.php';
if(isset($_SESSION['email'])){
	header('location:products.php');
}
?>
<!DOCTYPE html>
<!--Login using bootstrap-->
<html>
<head> 
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
 include 'header.php';
?>
<div id="background-image">
<div id="content">
<div class="container-fluid">
 <center>
 <div class="row row_style">
  <div class="container container_style">
   <div class="col-xs-9 col-xs-offset-1 col-md-5 col-md-offset-3">
    <div class="panel panel-info">
     <div class="panel-heading">
	 <h3>LOGIN</h3>
	 </div>
	 <div class="panel-body">
	  <form  method="post" action="login_script.php ">
		<div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
        </div>
        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
        </div>
	  <!--<p class="text-warning">Login to make a purchase</p>
	  <input type="email" class="form-control input-sm" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" style="color:black;font-family:verdana;" placeholder="Email">
	  <br><br>
	  
	  <input type="password" class="form-control input-sm"placeholder="Password" style="color:black;" pattern=".{6,}" required="true"><br><br>-->
	  <button type="submit" name="submit" class="btn btn-info btn-md">Login</button><br/>
	  <?php echo $_GET['error']; ?>
	 </form>
    </div>
	<div class="panel-footer">
	 <p class="text-warning">Don't have an account?<a href="signup.php" style="text-decoration:none;">Register</a></p>
	</div>
   </div>
   </div>
  </div>
 </div>
 </center>
</div>
</div>
</div>
</body>
<footer>
   <center>
     <div class="container-fluid">
	  <p>LifeStyle Store &copy | Contact:+91 8134022846</p>
     </div>
   </center>
 </footer>
</html>