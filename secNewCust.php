<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Secretery's new Customer Registration Page</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["username"]))
				header("Location: login.html");
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			
			$customerID = $_POST["customerID"];
			$fullname = $_POST["fullname"];
			$phone = $_POST["phone"];
			$age = $_POST["age"];
			$sql = "INSERT INTO Customer(customerID, full_name, phone_number, age)
						VALUES ('$customerID', '$fullname', '$phone', '$age')";
			if (mysqli_query($conn, $sql)){
				echo "New record created successfully. <br>Redirecting to Secretery's new Customer Registration Page.";
						?>
						<script>
							setTimeout(function() {
								window.location.href="secretaryNewCust.php";
							}, 3000);
						</script> 	
						<?php
			}else {
					echo mysqli_error($conn);
				?>
				<script>
					setTimeout(function() {
						window.location.href="secretaryNewCust.php";
					}, 3000);
				</script> 	
				<?php
				}
			
		?>
	</body>
</html>