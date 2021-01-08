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
			
			$cityname = $_POST["cityname"];
			$countryname = $_POST["countryname"];
			if(!empty($cityname) && !empty($countryname)){
				$sql = "INSERT INTO destination(city_name, country_name)
							VALUES ('$cityname', '$countryname')";
				if (mysqli_query($conn, $sql)){
					echo "New record created successfully. <br>Redirecting to Secretery's new Reservation Page.";
							?>
							<script>
								setTimeout(function() {
									window.location.href="secretaryNewDest.php";
								}, 3000);
							</script> 	
							<?php
				}else {
						echo mysqli_error($conn);
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewDest.php";
						}, 3000);
					</script> 	
					<?php
					}
			}else{
				echo "Please fill all fields. <br>Redirecting to Secretery's new Reservation Page.";
					?>
					<script>
						setTimeout(function() {
							window.location.href="secretaryNewDest.php";
						}, 3000);
					</script> 	
					<?php
			}
		?>
	</body>
</html>