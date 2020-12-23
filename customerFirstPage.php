<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>Customer's Page</title>
	</head>
	<body>
		<div class="header">
			<h2>MyBusApp</h2>
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
			<p>Login from <a href="customerlogin.html">here</a> to book a seat !!!<br>Don't have an account, NO PROBLEM!<br>sign up now for free clicking <a href="customersignup.html">here</a>.</p>
			<a href="index.php">
				<p style="text-align: center;"><button>Return to First Page</button></p>
			</a>
		<div>
			<p>Created by Group 2.</p>
		</div>
	</body>
	
</html>