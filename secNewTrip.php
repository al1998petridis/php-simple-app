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
			
			$dateofdeparture = $_POST["dateofdeparture"];
			$timeofdeparture = $_POST["timeofdeparture"];
			$dateofreturn = $_POST["dateofreturn"];
			$timeofreturn = $_POST["timeofreturn"];
			$secretaryID = $_POST["secretaryID"];
			if(!empty($dateofdeparture) && !empty($timeofdeparture) && !empty($dateofreturn) && !empty($timeofreturn) && !empty($secretaryID)){
				$sql = "INSERT INTO Trip(date_of_departure, time_of_departure, date_of_return, time_of_return, Secretary_Employee_employeeID)
							VALUES ('$dateofdeparture', '$timeofdeparture', '$dateofreturn', '$timeofreturn', '$secretaryID')";
				if (mysqli_query($conn, $sql)){
					echo "New record created successfully. <br>Redirecting to Secretery's new Trip Page.";
							?>
							<script>
								setTimeout(function() {
									window.location.href="secretaryNewTrip.php";
								}, 3000);
							</script> 	
							<?php
				}else {
						echo mysqli_error($conn);
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewTrip.php";
						}, 3000);
					</script> 	
					<?php
					}
			}else{
				echo "Please fill all fields. <br>Redirecting to Secretery's new Trip Page.";
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewTrip.php";
						}, 3000);
					</script> 	
					<?php
			}
		?>
	</body>
</html>