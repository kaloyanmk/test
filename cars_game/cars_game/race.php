<?php 
session_start();
echo"Here you can test your car against opponents !";

?>
<form action="index.php" method="post">
  		 <input type="submit" name="race_start" value="Start">
  		 
  	</form>		 


<?php
	  // 			$_SESSION['op_car_id']
      //           $_SESSION['op_car_name']
      //           $_SESSION['op_car_brakes']
	//				$_SESSION['op_car_engine']
      //           $_SESSION['op_car_acceleration']
      //           $_SESSION['op_car_img']

							// $_SESSION['my_car_id']
       //                    $_SESSION['my_car_name']
       //                    $_SESSION['my_car_engine']
       //                    $_SESSION['my_car_brakes']
       //                    $_SESSION['my_car_acceleration']
       //                    $_SESSION['my_car_img']

echo "Next opponent is ".$_SESSION['op_car_name']." !<br/>";
echo "His engine is level ".$_SESSION['op_car_engine'] ." !<br/>";
echo "His acceleration is  level ".$_SESSION['op_car_brakes'] ." !<br/>";
echo "His brakes are level ".$_SESSION['op_car_brakes'] ." !<br/>";

echo "---------------------------<br/><br/>";
echo $_SESSION['user_name']."`s car is ".$_SESSION['my_car_name']." !<br/>";
echo "Your engine is level ". $_SESSION['my_car_engine']." !<br/>";
echo "Your acceleration is level ".$_SESSION['my_car_acceleration']." !<br/>";
echo "Your brakes are level ". $_SESSION['my_car_brakes']." !<br/>";


?>