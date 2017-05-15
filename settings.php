<?php
require_once("common.php");
/*if (!isset($_SESSION['email'])) {
    header('location: index.php');
}*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
		<div id="background-image">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . $_POST['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
		</div>
        <?php include 'footer.php'; ?>
    </body>
</html>