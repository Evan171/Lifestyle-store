<?php
require 'common.php'; 
if(isset($_SESSION['email'])){
	header('location:products.php');
}
 ?>
<!DOCTYPE html>
<!--index using bootstrap-->
<html>
<head> 
  <title>LifeStyle Store</title>
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
 <div id="banner_image">
  <div class="container">
  <center>
  <div id="banner_content">
   <h3 style="font-family:courier;">We sell lifestyle</h3>
   <p style="font-family:courier;">FLAT 40% OFF on premium Brands</p>
   <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
  </div>
  </center>
  </div>
 </div>
 <div class="container-fluid">
  <div class="row text-center">
   <div class="col-xs-8 col-xs-offset-2 col-md-3 col-md-offset-1">
     <!--<a href="#" class="thumbnail"><img src="img/watch.jpg" alt="Responsive image"></a>
    <div class="caption">
      <h3>Watches</h3>
      <p>Original watches from best brands</p>
    </div>-->
	<div href="#" class="thumbnail" style="text-decoration:none;"><img src="img/watch.jpg" alt="Responsive image">
	<div class="caption">
	<h3>Watches</h3>
	<p>Original Watches from the best brands</p>
   </div>
   <a href="products.php#watches" style="text-decoration:none;">
   <button type="button" class="btn btn-info btn-block">Shop Watches</button></a>
   </div>
   </div>
   <div class="col-xs-8 col-xs-offset-2 col-md-3 col-md-offset-0">  
      <div href="#" class="thumbnail" style="text-decoration:none;"><img src="img/camera.jpg" alt="Responsive image">
    <div class="caption">
     <h3>Cameras</h3>
     <p>Choose among the best among the world</p>
    </div><a href="products.php#cameras" style="text-decoration:none;">
	<button type="button" class="btn btn-info btn-block">Shop Cameras</button>
	</a>
	</div>
   </div>
   <div class="col-xs-8 col-xs-offset-2 col-md-3 col-md-offset-0">
    <div href="#" class="thumbnail" style="text-decoration:none;"><img src="img/shirt.jpg">
    <div class="caption">
      <h3>Shirts</h3>
      <p>Enjoy the latest festive collection</p>
    </div>
	<a href="products.php#shirts" style="text-decoration:none;">
	<button type="button" class="btn btn-info btn-block">Shop Shirts</button></a>
	</div>
   </div>
 </div>
 </div>
 <div class="container">
  <center>
   <div class="container-fluid">
    <center>
  <h4>Subscribe to our newsletter</h4>
    <input type="text" class="flow-control" placeholder="example@xyz.com">
	<a href="subscribe.php" class="btn btn-primary btn-sm block">Subscribe</a>
    </center>
   </div>
  </center>
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