<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","cars_game");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<html>

	<head>
		<title> Registration Form </title>
	</head>

	<body>

		<form action="reg.php" method="post">

			<input type="text" name="user_reg_name" >

			<input type="password" name="user_reg_pass" >

			<input type="password" name="user_reg_pass_check" >
			
			<input type="submit" name="reg_submit" value="Register">

		</form>

<br/><br/><br/>


	</body>
</html>
<?php
if(isset($_POST['reg_submit'])){
if($_POST['user_reg_pass']==$_POST['user_reg_pass_check']){
	

		$name_user=$_POST['user_reg_name'];
		$pass_user=$_POST['user_reg_pass'];
mysqli_query($conn,"INSERT INTO `player`(`user_id`, `user_name`, `user_pass`, `car`, `lvl`, `money`) VALUES ('','$name_user','$pass_user','1','1','300')") ;
mysqli_query($conn,"INSERT INTO `my_car`(`owner`, `name`, `engine`, `brakes`, `acceleration`, `img`) VALUES ('$name_user','lambo','1','1','1','img')") ;

echo"Successfully registered !!!";
}
}
?>
<a href='login.php'> Login </a>