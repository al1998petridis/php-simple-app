<!DOCTYPE html>
<html>
	<head>
		<title>Customer's Page</title>
	</head>
	<style>
	body{
		background-color: lightblue;
		box-sizing: border-box;
		text-align: center;
	}
	.header{
		background-color: lightblue;
		padding: 20px;
		text-align: center;
		color: blue;
		border: 4px solid white;
		border-radius: 10px;
	}
	h1{
		text-align: center;
	}
	table {
		text-align: center;
		background-color: black;
		color: white;
		border: 4px solid white;
		border-radius: 10px;
		width: 35%;
		float: left;
	}
	th, td {
		border: 4px solid white;
		border-collapse: collapse;
	}
	
	p {
		text-align: center;
		text-indent: 50px;
		font-size: 25px;
	}
	h2{
		font-size: 35px;
		text-align: center;
	}

	</style>
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
			<p>Here is the field for creating a new reservation for himself</p>
		</div>
		<div>
			<a href="customerlogout.php">Log out</a>
		</div>
	</body>
	
</html>