<?php
  session_start();


?>

<html>
  <head>
  	<title> shop </title>
  </head>

<body>
	<form action="shop.php" method="post">
  <table border="1px">
        <tr>       
          <td>
                <div>Engine</div>
          </td>
          
          <td>
    				<input type="submit" name="e_upgrade" value="Upgrade"/>	
          </td>
        </tr>

        <tr>
          <td>
              <div>Brakes</div>
          </td>
  
          <td>
             <input type="submit" name="b_upgrade" value="Upgrade"/>	
          </td>
        </tr>

        <tr>
          <td>
              <div>Acceleration</div>
          </td>
  
          <td>
                <input type="submit" name="a_upgrade" value="Upgrade"/>	
          </td>
        </tr>
  
    </table>
  </form>
  </body>
  </html>
<?php
      if(isset($_POST['e_upgrade'])){
            header('Location: shop_e.php');

          
      }
      if(isset($_POST['b_upgrade'])){
            header('Location: shop_b.php');

          
      }
      if(isset($_POST['a_upgrade'])){
            header('Location: shop_a.php');

          
      }
?>