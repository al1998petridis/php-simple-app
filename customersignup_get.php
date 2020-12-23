<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Customer's Sign Up Page</title>
	</head>
	<body class="centered">
		<?php
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			
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
				?>
				<script>
					setTimeout(function() {
						window.location.href="customersignup.html";
					}, 3000);
				</script> 	
				<?php
				}
			}
			else
				echo "Username and Password cannot left empty";
			mysqli_close($conn);			
		
		?>
	</body>
</html>



