<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Secretary's Login Page</title>
	</head>
	<body class="centered">
		<?php
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			session_start();
			
			if(isset($_POST["username"]) && isset($_POST["password"])){
				$username = $_POST["username"];
				$password = $_POST["password"];
				$que = mysqli_query($conn,"SELECT * FROM registration WHERE username='$username' AND password='$password'");
				$num_rows = mysqli_num_rows($que);
				
				if ($num_rows == 1){
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;
				} else {
					echo "Invalid username and password combination.<br>Redirecting to Secretary's Login Page.";
		?>
 		<script>
			setTimeout(function() {
				window.location.href="login.html";
			}, 3000);
		</script> 
		<?php
				}	
			} else {
				echo "Please fill the fields.";
			}
			
			if(isset($_SESSION["username"])){
				echo "Authentication Success" ."<br>". "Redirecting to Secretary's first page.";
		?>
 		<script>
			setTimeout(function() {
				window.location.href="secreteryFirstPage.php";
			}, 3000);
		</script> 
		<?php
			}
			
			
			
		?>
	</body>
</html>