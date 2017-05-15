<?php 
session_start();
if(isset($_SESSION['id'])){
	echo "Hello".$_SESSION['email'];
}else{
	echo "Hello Guest";
}
?>
<!DOCTYPE html>
<!--Login using bootstrap-->
<html>
<head> 
  <title>Signup</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a href="index.php" class="navbar-brand">Lifestyle Store</a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="login.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
    </ul>
   </div>
  </div>
 </nav>
<div id="background-image">
<div class="container-fluid">
<div id="content">
 <div class="row row_style">
  <div class="container container_style">
   <div class="col-xs-9 col-xs-offset-1 col-md-6 col-md-offset-3">
    <div class="panel panel-info">
     <div class="panel-heading"><h3>SIGN UP</h3></div>
	 <div class="panel-body">
	  <p class="text-warning">Sign up to your new account.</p>
	  <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="11" pattern="/^[789][0-9]{10}" size="11" name="contact">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
							<div class="form-group">
                            <button type="submit" name="submit" class="btn btn-info">Sign Up</button>
							</div><br/> 
<?php echo $_GET['m1']; ?><br/><?php echo $_GET['m2']; ?> 							
	 </form>
	 </div>
	<div class="panel-footer">
							
								<center>
								<div class="form-group">
									<button id="button1id" name="fb" class="btn btn-primary">Facebook</button></div>
									<div class="form-group">
									<button id="button2id" name="google+" class="btn btn-danger">Google+</button>
									</div>
								</center>									
							
	</div>
</div>
   </div>
   </div>
  </div>
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