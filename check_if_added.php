<?php
	function check_if_added_to_cart($item_id){
		require 'common.php';
		$user_id=$_SESSION['user_id'];
		$query="select * from users_items where user_id='$user_id' and item_id='$item_id'";
		$result=mysqli_query($con,$query);
		$count=mysqli_num_rows($result);
		if($count>=1){
			return 1;
		}else{
			return 0;
		}
	}
 ?>