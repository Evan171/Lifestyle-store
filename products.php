<?php
	require 'common.php';
	session_start();
 ?>
<!--index using bootstrap-->
<html>
<head> 
  <title>LifeStyle Store</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
 <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<?php
include 'header.php';
include 'check_if_added.php';
 ?>
<div class="container">
 <div class="jumbotron text-center">
  <h1>Welcome to LifeStyle Store!</h1>
  <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place</p>
 </div>
 </div>
 <div class="container" id="cameras">
  <h2 id="kncmh_pedda">Cameras</h2>
 <div class="row text-center">
  <div class="col-xs-6 col-md-3">
   <div  class="thumbnail" style="text-decoration:none;">
   <img src="img/canon_eos.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
   <div class="caption">
    <h4>Canon EOS</h4>
	<p>Price Rs:35,999.00</p>
   </div>
   <?php
     if(!isset($_SESSION['email'])){ ?>
		 <a href="login.php" style="text-decoration:none;">
		 <button type="button" class="btn btn-primary btn-block">Buy Now</button>
		 </a>
	 <?php } else {?>
	 <?php 
			if(check_if_added_to_cart(1)){ ?>
			<a style="text-decoration:none;">
			<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
 			</a>
		<?php	} else{ ?>
		    <a href="cart-add.php?id=1" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
			</a>
		<?php  } 
		 
	           } ?> 
   <!--<button type="button" class="btn btn-primary btn-block">Add to Cart</button>-->
            </div>
  </div>
  <div class="col-xs-6 col-md-3">
   <div href="#" class="thumbnail" style="text-decoration:none;">
   <img src="img/nikon_dslr.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
   <div class="caption">
   <h4>NIKON DSLR</h4>
   <p>Price Rs:39,999.00</p>
   </div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(2)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=2" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
   <!--<button type="button" class="btn btn-primary btn-block">Add to Cart</button>-->
   </div>
  </div>
  <div class="col-xs-6 col-md-3">
   <div class="thumbnail" style="text-decoration:none;">
    <img src="img/sony_dslr.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
	<div class="caption">
	 <h4>SONY DSLR</h4>
	 <p>Price Rs:42,999.00</p>
	</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(3)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=3" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	</div>
   </div>
   <div class="col-xs-6 col-md-3">
    <div class="thumbnail" style="text-decoration:none;">
	 <img src="img/olympus_dslr.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
	 <div class="caption">
	  <h4>Olympus DSLR</h4>
	  <p>Price Rs:48,999.00</p>
	 </div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(4)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=4" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	</div>
	</div>
	</div>
 </div>
 <div class="row">
 <div class="container" id="watches">
  <h2 id="kncmh_pedda">Watches</h2>
	<div class="row text-center">
	 <div class="col-xs-6 col-md-3">
	  <div class="thumbnail" style="text-decoration:none;">
	   <img src="img/omega_1.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
	    <div class="caption">
		 <h4>Omega Seamaster</h4>
		 <p>Price Rs:12,999.00</p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(5)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=5" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	  </div>
	 </div>
	 <div class="col-xs-6 col-md-3">
	  <div class="thumbnail" style="text-decoration:none;">
	   <img src="img/fastrack_1.jpg" class="img-fluid" style="max-width:180px;max-height:120px;">
	   <div class="caption">
	    <h4>Fastrack Men Blue </h4>
		<p>Price Rs:1,799.00</p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(6)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=6" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	  </div>
	 </div>
 	 <div class="col-xs-6 col-md-3">
	  <div class="thumbnail" style="text-decoration:none;">
	   <img src="img/roadster_1.jpg" class="img-fluid"  style="max-width:180px;max-height:120px;">
	   <div class="caption">
	    <h4>Roadster Men Maroon</h4>
		<p>Price Rs:1,439.00(40%off)<del><i>2,399.00</i><del></p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(7)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=7" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	  </div>
	 </div>
 	 <div class="col-xs-6 col-md-3">
	  <div class="thumbnail" style="text-decoration:none;">
	   <img src="img/fossil_1.jpg" class="img-fluid"  style="max-width:180px;max-height:120px;">
	   <div class="caption">
	    <h4>Fossil Men Black</h4>
		<p>Price Rs:8,799.00(13% off)<del><i>10,000</i></del></p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(8)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=8" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	  </div>
	 </div>
	 </div>
	 </div>
</div>
<div class="row">
	 <div class="container" id="shirts">
	 <h2 id="kncmh_pedda">Shirts</h2>
	 <div class="row text-center">
	  <div class="col-xs-6 col-md-3">
	   <div class="thumbnail" style="text-decoration:none;">
	    <img src="img/roadster_shirt1.jpg" class="img-fluid"  style="max-width:120px;max-height:180px;">
		<div class="caption">
		 <h4>Roadster </h4>
		 <p>Price Rs:1,199.00</p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(9)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=9" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	   </div>
	  </div>
	  <div class="col-xs-6 col-md-3">
	   <div class="thumbnail" style="text-decoration:none;">
	    <img src="img/ucb_shirt1.jpg" class="img-fluid"  style="max-width:120px;max-height:180px;">
		<div class="caption">
		 <h4>UCB</h4>
		 <p>Price Rs:1,619.00(40% off)<del>2699.00</del></p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(10)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=10" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	   </div>
	  </div>
	  <div class="col-xs-6 col-md-3">
	   <div class="thumbnail" style="text-decoration:none;">
	    <img src="img/mnh_sweatshirt1.jpg" class="img-fluid"  style="max-width:120px;max-height:180px;">
		<div class="caption">
		 <h4>Mast & Harbour </h4>
		 <p>Price Rs:969.00(50% off)<del>1738.00</del></p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(11)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=11" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
	   </div>
	  </div>
	    <div class="col-xs-6 col-md-3">
	   <div class="thumbnail" style="text-decoration:none;">
	    <img src="img/blazer.jpg" class="img-fluid"  style="max-width:120px;max-height:180px;">
		<div class="caption">
		 <h4>Blazers</h4>
		 <p>Starting From 1299</p>
		</div>
   <?php
		if(!isset($_SESSION['email'])){?>
			<a href="login.php" style="text-decoration:none;">
			<button type="button" class="btn btn-primary btn-block">Buy Now</button>
			</a>
			<?php } else if(check_if_added_to_cart(12)) { ?>
				<a href="#" style="text-decoration:none;">
					<button type="button" class="btn btn-success btn-block disabled">Added to Cart</button>
				</a>
			<?php } else { ?>
				<a href="cart-add.php?id=12" style = "text-decoration:none;">
					<button type="button" class="btn btn-primary btn-block">Add to Cart</button>
				</a>
			<?php	} ?>
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
		