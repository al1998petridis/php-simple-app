<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Customer's Logout Page</title>
	</head>
	<body>
	<?php
		session_start();
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
		
		echo "Redirecting to Customer's First Page.";
		?>
 		<script>
			setTimeout(function() {
				window.location.href="customerFirstPage.php";
			}, 3000);
		</script> 
	</body>
</html>