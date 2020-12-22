<!DOCTYPE html>
<html>
	<head>
		<title>Customer's Sign Up Page</title>
	</head>
	<style>
		body{
			font-family: Georgia;
			border: 4px solid white;
			border-radius: 10px;
			padding: 100px;
			background-color: lightblue;
			text-align: center		
		}
	</style>
	<body>
		<?php
			include "config.php";
			$conn -> select_db("mydb");
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			
			if (($username!=NULL) && ($password!=NULL)){
				$sql = "INSERT INTO customers (username, password, firstname, lastname)
				VALUES ('$username', '$password', '$firstname', '$lastname')";
				
				if (mysqli_query($conn, $sql) && (($username)!= NULL) && (($password) != NULL)) {
					echo "New record created successfully. <br>Redirecting to Login Page.";
				?>
				<script>
					setTimeout(function() {
						window.location.href="customerlogin.html";
					}, 3000);
				</script> 	
				<?php
				} else {
					echo mysqli_error($conn);
				}
			}
			else
				echo "Username and Password cannot left empty";
			mysqli_close($conn);			
		
		?>
	</body>
</html>



