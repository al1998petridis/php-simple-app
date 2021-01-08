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
			
			$fullname = $_POST["fullname"];
			$age = $_POST["age"];
			$phone = $_POST["phone"];
			$salary = $_POST["salary"];
			$contractduration = $_POST["contractduration"];
			$officeID = $_POST["officeID"];
			$carlicense = $_POST["carlicense"];
			
			if(!empty($fullname) && !empty($age) && !empty($phone) && !empty($salary) && !empty($contractduration)
			&& !empty($officeID) && !empty($carlicense)){
				$sql = "INSERT INTO Employee(full_name, age, phone, salary, contract_duration, Office_officeID)
							VALUES ('$fullname', '$age', '$phone', '$salary', '$contractduration', '$officeID')";
				$sql2 = "INSERT INTO Driver(car_license_ID, Employee_employeeID)
							SELECT '$carlicense', employeeID FROM Employee WHERE employeeID = (SELECT max((employeeID)) FROM Employee);";
				
				if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
					echo "New record created successfully. <br>Redirecting to Secretery's new Driver Page.";
							?>
							<script>
								setTimeout(function() {
									window.location.href="secretaryNewDriver.php";
								}, 3000);
							</script> 	
							<?php
				}else {
						echo mysqli_error($conn);
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewDriver.php";
						}, 3000);
					</script> 	
					<?php
					}
			}else{
				echo "Please fill all fields. <br>Redirecting to Secretery's new Driver Page.";
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewDriver.php";
						}, 3000);
					</script> 	
					<?php
			}
		?>
	</body>
</html>