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
			
			$fullname = $_POST["fullname"];
			$phone = $_POST["phone"];
			$age = $_POST["age"];
			if(!empty($full_name) && !empty($phone) && !empty($age)){
				$sql = "INSERT INTO Customer(full_name, phone_number, age)
							VALUES ('$fullname', '$phone', '$age')";
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
			} else{
				echo "Please fill all fields";
			}

			
		?>
	</body>
</html>