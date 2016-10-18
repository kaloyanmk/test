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
		<title> Login</title>
	</head>

	<body>

		<form action="login.php" method="post">

			<input type="text" name="user_login_name" >

			<input type="password" name="user_login_pass" >

			
			
			<input type="submit" name="login_submit" value="Register">

		</form>

<br/><br/><br/>


	</body>
</html>
<?php
if(isset($_POST['login_submit'])){

			



$name = mysqli_real_escape_string($conn,$_POST['user_login_name']);

$pass = mysqli_real_escape_string($conn,$_POST['user_login_pass']);

$sel_user =("SELECT `user_name`, `user_pass` FROM `player` WHERE `user_name`='$name' AND `user_pass`='$pass'");
$sql = "SELECT `user_name`, `user_pass`, `car`, `lvl`, `money` FROM `player` WHERE `user_name`='$name'";
$run_user = mysqli_query($conn, $sel_user);


$check_user = mysqli_num_rows($run_user);

if($check_user>0){



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['user_name']= $row["user_name"];
        $_SESSION['user_pass']= $row["user_pass"] ;
        $_SESSION['user_car']= $row["car"];
        $_SESSION['user_lvl']= $row["lvl"];
        $_SESSION['user_money']= $row["money"];

header('Location: index.php');

}
}

}
}
?>