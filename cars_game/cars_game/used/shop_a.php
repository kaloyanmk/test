 <?php
	session_start();
	$conn = mysqli_connect("localhost","root","","cars_game");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
 <form action="shop_a.php" method="post">
 
        
    				<input type="submit" name="back_to_shop" value="Back"/>	

            <input type="hidden" name="hidden" value="Back"/> 

  </form>

          
 <?php

$shop_type=("SELECT * FROM `shop` WHERE `type`='2'");




$result = $conn->query($shop_type);
echo "<form  action=\"shop_a.php\" method=\"post\">";

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
$name_n=$_SESSION['user_name'];
      for($i=0; $i<$count;$i++)
      {
          if(isset($_POST[$i]))
          {
            $func=("UPDATE `my_car`SET `acceleration`=`acceleration`+$var[$i] WHERE `owner`='$name_n'");
								 mysqli_query($conn,$func) ;
							header('Location: shop_a.php');
                    //break;
            // echo $name_n;
          }
    	}
      
         if(isset($_POST['back_to_shop'])){
            header('Location: shop.php');


}
    ?>