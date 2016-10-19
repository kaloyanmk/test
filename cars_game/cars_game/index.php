<?php
session_start();
echo "lets get started";

echo $_SESSION['user_name']. " ";
echo $_SESSION['user_pass']. " ";
 echo $_SESSION['user_car']. " ";
  echo$_SESSION['user_lvl']. " ";
  echo$_SESSION['user_money']. " ";

  $conn = mysqli_connect("localhost","root","","cars_game");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
	
  	<form action="index.php" method="post">
  		 <input type="submit" name="logout_submit" value="Log out">
  		  <input type="submit" name="shop_submit" value="Shop">
        <input type="submit" name="race_submit" value="Race">
  	</form>		 
    
  <?php
    if(isset($_POST['logout_submit'])){
	    session_destroy();
	    header('Location: login.php');
    }

    if(isset($_POST['shop_submit'])){
	   	
	    header('Location: shop.php');
    }
     if(isset($_POST['race_submit'])){
      
                  $user_lvl=$_SESSION['user_lvl'] ; 
                $user_opponent =("SELECT * FROM `cars_race` WHERE `car_id`='$user_lvl'");
                $result = $conn->query($user_opponent);

              if ($result->num_rows > 0) {
                    // output data of each row
                      while($row = $result->fetch_assoc()) {
                         $_SESSION['op_car_id']= $row["car_id"];
                          $_SESSION['op_car_name']= $row["name"] ;
                          $_SESSION['op_car_engine']= $row["engine"];
                          $_SESSION['op_car_brakes']= $row["brakes"];
                          $_SESSION['op_car_acceleration']= $row["acceleration"];
                          $_SESSION['op_car_img']= $row["img"];
                      }

              }
              $name_n=$_SESSION['user_name'];
              $user_car_race =("SELECT * FROM `my_car` WHERE `owner`='$name_n'");
                $result_u = $conn->query($user_car_race);

              if ($result_u->num_rows > 0) {
                    // output data of each row
                      while($row = $result_u->fetch_assoc()) {
                         $_SESSION['my_car_id']= $row["id_of_my_car"];
                          $_SESSION['my_car_name']= $row["name"] ;
                          $_SESSION['my_car_engine']= $row["engine"];
                          $_SESSION['my_car_brakes']= $row["brakes"];
                          $_SESSION['my_car_acceleration']= $row["acceleration"];
                          $_SESSION['my_car_img']= $row["img"];
                      }

              }
              header('Location: race.php');
        }
              
    
    ?>
      
      
      
   