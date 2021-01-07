<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Customer's Page</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["username"]))
				header("Location: customerFirstPage.php");		
		?>
		<div class="header">
			<h1>MyBusApp</h1>
		</div>
		<div>
			<h1>Busdb Destinations</h1>
			<table><?php
				include "config.php";
				$conn -> select_db("heroku_ed39a20fb4d6fd8");
				$query = "SELECT * FROM destination";
				$result = mysqli_query($conn, $query);
				$all_data = array();
				while ($data = mysqli_fetch_field($result)) {
					echo '<td>' . $data->name . '</td>';  //get field name for header
					array_push($all_data, $data->name);  //save those to array
				}
				echo '</tr>'; //end tr tag

				//showing all data
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					foreach ($all_data as $item) {
						echo '<td>' . $row[$item] . '</td>'; //get items using data value
					}
					echo '</tr>';
				}
				echo "</table>";				
			?></table>
		</div>
		<div>
			<h2>I want to travel with Busdb</h2>
		</div>
		<div>
			<form action="customernewReserve.php" method="POST">
			<p>Complete my profile</p>
			<input type="text" name="fullname" placeholder="Enter your Full Name" size=25><br/>
			<input type="text" name="phone" placeholder="Enter phone number" size=20><br/>
			<input type="text" name="age" placeholder="Enter age" size=10><br/>
			<button type="submit">Sign Up</submit></button>
		</div>
		<div>
			<a href="customerlogout.php">Log out</a>
		</div>
	</body>
	
</html>