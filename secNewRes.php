<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Secretery's new Reservation Page</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["username"]))
				header("Location: login.html");
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			
			$tripID = $_POST["tripID"];
			$customerID = $_POST["customerID"];
			$price = $_POST["price"];
			$seat_num = $_POST["seat_num"];
			if(!empty($tripID) && !empty($customerID) && !empty($price) && !empty($seat_num)){
				$sql = "INSERT INTO reservation(Trip_tripID, Customer_customerID, price, seat_num)
							VALUES ('$tripID', '$customerID', '$price', '$seat_num')";
				if (mysqli_query($conn, $sql)){
					echo "New record created successfully. <br>Redirecting to Secretery's new Reservation Page.";
							?>
							<script>
								setTimeout(function() {
									window.location.href="secretaryNewRes.php";
								}, 3000);
							</script> 	
							<?php
				}else {
						echo mysqli_error($conn);
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewRes.php";
						}, 3000);
					</script> 	
					<?php
					}
			}else{
				echo "Please fill all fields";
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewRes.php";
						}, 3000);
					</script> 	
					<?php
			}
		?>
	</body>
</html>