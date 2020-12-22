<!DOCTYPE html>
<html>
	<head>
		<title>Secretary's Logout Page</title>
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
		session_start();
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
		
		echo "Redirecting to Login Page.";
		?>
 		<script>
			setTimeout(function() {
				window.location.href="login.html";
			}, 3000);
		</script> 
	</body>
</html>