<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" href="styles.css">
		<title>Secretary's New Trip Page</title>
	</head>
	<style>
	.topnav{
		padding:0px;
		background-color: grey;
		text-align: center;
		border-radius: 10px;
	}
	
	.dropbtn {
		background-color: grey;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
	}
	
	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		position: absolute;
		display: none;
		background-color: grey;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: white;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {background-color: black;}

	.dropdown:hover .dropdown-content {display: block;}

	.dropbtn:hover {
		background-color: white;
		color: grey;
	}
	
	</style>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["username"]))
				header("Location: login.html");		
		?>
		<div class="header">
			<h1>MyBusApp</h1>
		</div>
		<div class="topnav">
			<div class="dropdown">
				<button class="dropbtn">Reservations</button>
				<div class="dropdown-content">
					<a href="secretaryNewRes.php">New Reservation</a>
					<a href="secretaryResSearch.php">Reservation Search</a>
					<a href="secretaryCancelRes.php">Cancel Reservation</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Customers</button>
				<div class="dropdown-content">
					<a href="secretaryNewCust.php">New Customer Registration</a>
					<a href="secretaryCustSearch.php">Customer Search</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Destinations</button>
				<div class="dropdown-content">
					<a href="secretaryNewDest.php">New Destination Registration</a>
					<a href="secretaryDesSearch.php">Destination Search</a>
					<a href="secretaryViewDest.php">View Destinations</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Trip</button>
				<div class="dropdown-content">
					<a href="secretaryNewTrip.php">Create new Trip</a>
					<a href="secretarySearchTrips.php">Search Trips</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">Drivers</button>
				<div class="dropdown-content">
					<a href="secretaryNewDriver.php">Add new Driver</a>
					<a href="#">Driver Search</a>
				</div>
			</div>
		</div>
		<div>
			<p>Create New Trip</p>
			<form action="secNewTrip.php" method="POST">
				<input type="date" name="dateofdeparture" placeholder="Enter date of departure" size=10><br/>
				<input type="time" name="timeofdeparture" placeholder="Enter time of departure" size=20><br/>
				<input type="date" name="dateofreturn" placeholder="Enter date of return" size=10><br/>
				<input type="time" name="timeofreturn" placeholder="Enter time of return" size=20><br/>
				<input type="text" name="secretaryID" placeholder="Enter your secretary ID" size=20><br/>
				<button type="submit">Submit Reservation</submit></button>
			</form>
		</div>
		<div>
			<a href="logout.php">Log out</a>
		</div>
	</body>
	
</html>