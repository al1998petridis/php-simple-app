<!DOCTYPE html>
<html>
	<head>
		<title>Customer's Logout Page</title>
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
		
		echo "Redirecting to Customer's First Page.";
		?>
 		<script>
			setTimeout(function() {
				window.location.href="customerFirstPage.php";
			}, 3000);
		</script> 
	</body>
</html>