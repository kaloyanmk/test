<?php
session_start();
echo "lets get started";

echo $_SESSION['user_name']. " ";
echo $_SESSION['user_pass']. " ";
 echo $_SESSION['user_car']. " ";
  echo$_SESSION['user_lvl']. " ";
  echo$_SESSION['user_money']. " ";

?>
	
  	<form action="index.php" method="post">
  		 <input type="submit" name="logout_submit" value="Log out">
  		  <input type="submit" name="shop_submit" value="Shop">
  	</form>		 
    
  <?php
    if(isset($_POST['logout_submit'])){
	    session_destroy();
	    header('Location: login.php');
    }

    if(isset($_POST['shop_submit'])){
	   	
	    header('Location: shop.php');
    }
    ?>
      
      
      
   