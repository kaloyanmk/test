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
		<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
  		<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>
	</head>

	<body>
		<script type="text/javascript">
			/*function myFunction() {
			    var pass1 = document.getElementById("pass1").value;
			    var pass2 = document.getElementById("pass2").value;
			    var ok = true;
			    if (pass1 != pass2) {
			        //alert("Passwords Do not match");
			        document.getElementById("pass1").style.borderColor = "#E34234";
			        document.getElementById("pass2").style.borderColor = "#E34234";
			        ok = false;
			    }
			    else {
			        alert("Passwords Match!!!");
			    }
			    return ok;
			}
			*/
			$(document).ready(function() {
			  $("#pass2").keyup(validate);
			});


			function validate(submit_check) {
				var password1 = $("#pass1").val();
				var password2 = $("#pass2").val();

			    
			 
			    if(password1 == password2) {
			       	$("#validate-status").text("success");
			       	$("#validate-status").css("color", "green"); 

			       	if(submit_check==1)
			       	{
			       		alert("Yes");
			       	}       
			    }
			    else {
			        $("#validate-status").text("fail");
			        $("#validate-status").css("color", "red");
					
					if(submit_check==1)
					{
						alert("No");
					}
			    }
			    
			}

		</script>
		<table border='1'>

			<form action="reg.php" method="post" >
				<tr>
					<td>
						<input type="text" name="user_reg_name" >
					</td>
				</tr>
			
				<tr>
					<td>
						<input type="text" name="user_reg_pass" id="pass1">
					</td>
				</tr>
			
				<tr>	
					<td>
						<input type="text" name="user_reg_pass_check" id="pass2">
					</td>
				</tr>
				
				<tr>
					<td style="background-color: lightgrey">
						<p id="validate-status"></p>
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="reg_submit" value="Register" onclick="validate(1)"> 

					</td>
				</tr>
			
			</form>
		</table>
<br/><br/><br/>


	</body>
</html>
<?php
if(isset($_POST['reg_submit'])){
if($_POST['user_reg_pass']==$_POST['user_reg_pass_check']){
	

		$name_user=$_POST['user_reg_name'];
		$pass_user=$_POST['user_reg_pass'];
mysqli_query($conn,"INSERT INTO `player`(`user_id`, `user_name`, `user_pass`, `car`, `lvl`, `money`) VALUES ('','$name_user','$pass_user','1','1','300')") ;
echo"Successfully registered !!!";
}
}
?>
<a href='login.php'> Login </a>