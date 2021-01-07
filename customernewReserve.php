<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Customer's Extra Page</title>
	</head>
	<body>
		<?php
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			
			$phone = $_POST["phone"];
			$age = $_POST["age"];
			$sql = "INSERT INTO customers (full_name, phone_number, age)
						VALUES ('$fullname', '$phone', '$age')";
			if (mysqli_query($conn, $sql)){
				echo "New record created successfully. <br>Redirecting to Customer First Page.";
						?>
						<script>
							setTimeout(function() {
								window.location.href="customerwithlogin2.php";
							}, 3000);
						</script> 	
						<?php
			}else {
					echo mysqli_error($conn);
				?>
				<script>
					setTimeout(function() {
						window.location.href="customerwithlogin.php";
					}, 3000);
				</script> 	
				<?php
				}
			
		?>
	</body>
</html>