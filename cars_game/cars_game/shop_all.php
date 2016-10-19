 <?php
	session_start();
	$conn = mysqli_connect("localhost","root","","cars_game");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
 <form action="shop_all.php" method="post">
 
        
    				<input type="submit" name="back_to_shop" value="Back"/>	

  </form>

          
 <?php
  $data=$_SESSION['data'];
 $Check=0;
if($data=="engine"){
	$Check=1;

}
if($data=="acceleration"){
	$Check=2;

}

if($data=="brakes"){
	$Check=3;

}
$shop_type=("SELECT * FROM `shop` WHERE `type`=$Check");




$result = $conn->query($shop_type);
echo "<form  action=\"shop_all.php\" method=\"post\">";

    echo "<table ";
    echo"<tr>";
    		 echo"<td>";
    		 		echo"Power";
    		  echo"</td>";

    		   echo"<td>";
    		 		echo"Price";
    		  echo"</td>";

    		   echo"<td>";
    		 		echo" ";
    		  echo"</td>";
    echo"</tr>";
    $count=0;
    	$var=array();
    	$var_pay=array();
    while($row = $result->fetch_assoc()) {

    echo"<tr>";
		    echo"<td>";
		   			echo $row["power"];
		   			$var[$count]=$row["power"];
		   			
		    echo"</td>";
	
		    echo"<td>";
		   			echo $row["price"];
		   			$var_pay[$count]=$row["price"];
		   			
		    echo"</td>";
	
		     echo"<td>";
		   			echo $row["img"];
		   			
		    echo"</td>";

		        echo"<td>";
		   			
		   			echo "<input type='submit' name=$count value='Update'>";
		    echo"</td>";
		   			
		  
		   		
     $count++;	
		   			

    echo"</tr>";


     
	}
	    

	echo"</table>";

echo "</form>";
$name_n=$_SESSION['user_name'];
      for($i=0; $i<$count;$i++)
      {
          if(isset($_POST[$i]))
          {
          	if($_SESSION['user_money']>$var_pay[$i] || $_SESSION['user_money']==$var_pay[$i]){

          	
          	//header('Location: shop_all.php');
								mysqli_query($conn,"UPDATE `my_car`SET `$data`=`$data`+$var[$i] WHERE `owner`='$name_n'") ;
								mysqli_query($conn,"UPDATE `player` SET `money`=`money`-$var_pay[$i] WHERE `user_name`='$name_n'");
								$_SESSION['user_money']=$_SESSION['user_money']-$var_pay[$i];
								header('Location: shop_all.php');
				}
				if($_SESSION['user_money']<$var_pay[$i]){
					echo "<script> window.alert('Not enought moneyyyyy !');</script>";
					//header('Location: shop_all.php');
					
				}
				 echo $_SESSION['user_money'];

          }
    	}
      
         if(isset($_POST['back_to_shop'])){
            header('Location: shop.php');


}
    ?>