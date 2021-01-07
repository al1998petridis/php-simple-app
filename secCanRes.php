<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Secretery's Cancel Reservation Page</title>
	</head>
	<body>
		<?php
			include "config.php";
			$conn -> select_db("heroku_ed39a20fb4d6fd8");
			
			$tripID = $_POST["tripID"];
			$customerID = $_POST["customerID"];
			if (!empty($customerID) && !empty($tripID)){
					$sql = "DELETE FROM reservation WHERE Trip_tripID = '$tripID' AND Customer_customerID = '$customerID'";	
			}
			else{
				echo "Please fill both customerID and tripID"; 
			}
			if (mysqli_query($conn, $sql)){
				echo "New record deleted successfully. <br>Redirecting to Secretery's Cancel Reservation Page.";
						?>
						<script>
							setTimeout(function() {
								window.location.href="secretaryCancelRes.php";
							}, 3000);
						</script> 	
						<?php
			}else {
					echo mysqli_error($conn);
				?>
				<script>
					setTimeout(function() {
						window.location.href="secretaryCancelRes.php";
					}, 3000);
				</script> 	
				<?php
				}
			
		?>
	</body>
</html>