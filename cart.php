<?php require 'common.php';
if(!isset($_SESSION['user_id'])){
	header('location:index.php');
}
 ?>
<html>
<head> 
  <title>Cart</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
 <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<?php include 'header.php'; ?>
<!--<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
  </button>
  <a href="index.php" class="navbar-brand">LifeStyle Store</a>
  </div>
 <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="cart.php" style="text-decoration:none;">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
  <li><a href="settings.php" style="text-decoration:none;">Settings <span class="glyphicon glyphicon-wrench"></span></a></li>
  <li><a href="logout.php" style="text-decoration:none;">Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
  </ul>
 </div>
</div>
</nav>-->
<div class="container">
 <div class="row row_style">
 <div class="container container_style">
 <div class="col-xs-6 col-xs-offset-3">
 <center>
  <table class="table table-hover table-striped table-bordered">
  <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                       ?>
 
   <tbody>
    <tr>
	 <th>Item Number</th>
	 <th>Item Name</th>
	 <th>Price</th>
	 <th></th>
	</tr>
	<?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?><br/><a href="products.php" class="btn btn-danger btn-sm">Shop Now</a>
                        <?php
                        ?>
	<!--<tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	</tr>
	<tr>
	 <td></td>
	 <td>Total</td>
	 <td></td>
	 <td><a href="success.php" style="text-decoration:none;"><button type="button" class="btn btn-primary btn-block">Confirm Order</button></a></td>
	</tr>-->
</tbody>
</table>
</center>
</div>
</div>
<div class="jumbotron">
<h6><span class="glyphicon glyphicon-globe"></span> Support/customer care:Toll Free:040-25602650</h6>
<h6><span class="glyphicon glyphicon-envelope"></span> Write to us:lifestylestore@gmail.com</h6>
</div>
</div>
</div>
<footer>
   <center>
     <div class="container-fluid">
	  <p>LifeStyle Store &copy | Contact:+91 8134022846</p>
     </div>
   </center>
 </footer>
 </body>
</html>