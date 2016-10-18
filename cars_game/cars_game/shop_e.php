 <?php
	session_start();
	$conn = mysqli_connect("localhost","root","","cars_game");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
 <form action="shop_e.php" method="post">
 
        
    				<input type="submit" name="back_to_shop" value="Back"/>	

  </form>

          
 <?php

$shop_type=("SELECT * FROM `shop` WHERE `type`='1'");




$result = $conn->query($shop_type);
echo "<form  action=\"shop_e.php\" method=\"post\">";

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
    while($row = $result->fetch_assoc()) {

    echo"<tr>";
		    echo"<td>";
		   			echo $row["power"];
		   			$var[$count]=$row["power"];
		   			
		    echo"</td>";
	
		    echo"<td>";
		   			echo $row["price"];
		   			
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
      for($i=0; $i<$count;$i++)
      {
          if(isset($_POST[$i]))
          {
								mysqli_query($conn," UPDATE `my_car` SET `engine`=`engine`+$var[$i] WHERE 1") ;
								 header('Location: shop_e.php');


          }
    	}
      
         if(isset($_POST['back_to_shop'])){
            header('Location: shop.php');


}
    ?>