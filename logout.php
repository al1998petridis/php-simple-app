<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Secretary's Logout Page</title>
	</head>
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