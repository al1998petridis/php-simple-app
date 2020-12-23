<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<style>
		.button {
			display: block;
			border-radius: 4px;
			background-color: blue;
			border: none;
			color: white;
			text-align: center;
			font-size: 30px;
			padding: 20px;
			width: 300px;
			transition: all 0.5s;
			cursor: pointer;
			margin: 4px;
			margin-left: auto;
			margin-right: auto;
		}	

		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.button:hover span {
			color: black;
			padding-right: 25px;
		}

		.button:hover span:after {
			color: black;
			opacity: 1;
			right: 0;
		}
		.overlay {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: blue;
			overflow-x: hidden;
			transition: 0.6s;
		}

		.overlay-content {
			position: relative;
			top: 25%;
			width: 100%;
			text-align: center;
			margin-top: 30px;
		}

		.overlay a {
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: white;
			display: block;
			transition: 0.3s;
		}

		.overlay a:hover, .overlay a:focus {
			color: black;
		}

		.overlay .closebtn {
			position: absolute;
			top: 20px;
			right: 45px;
			font-size: 60px;
		}

		@media screen and (max-height: 450px) {
			.overlay a {font-size: 20px}
			.overlay .closebtn {
				font-size: 40px;
				top: 15px;
				right: 35px;
			}
		}	

		</style>
		<title>Secretary First Page</title>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["username"]))
				header("Location: login.html");		
		?>
		<div id="ResNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav('ResNav')">&times;</a>
			<div class="overlay-content">
				<a href="#">New Reservation</a>
				<a href="#">Reservation Search</a>
				<a href="#">Cancel Reservation</a>
			</div>
		</div>
		<div id="CusNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav('CusNav')">&times;</a>
			<div class="overlay-content">
				<a href="#">New Customer Registration</a>
				<a href="#">Customer Search</a>
			</div>
		</div>
		<div id="DesNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav('DesNav')">&times;</a>
			<div class="overlay-content">
				<a href="#">New Destination Registration</a>
				<a href="#">Destination Search</a>
				<a href="#">View Destinations</a>
			</div>
		</div>
		<div id="TrNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav('TrNav')">&times;</a>
			<div class="overlay-content">
				<a href="#">Create new Trip</a>
				<a href="#">Search Trips</a>
			</div>
		</div>
		<div id="DrNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav('DrNav')">&times;</a>
			<div class="overlay-content">
				<a href="#">Add new Driver</a>
				<a href="#">Driver Search</a>
			</div>
		</div>
		<div class="header">
			<h1>MyBusApp</h1>
		</div>
		<div>
			<h1>Applications for Secretaries</h1>
		</div>
		<div>
			<button class="button" style="vertical-align:middle" onclick="openNav('ResNav')"><span>Reservations</span></button>
			<button class="button" style="vertical-align:middle" onclick="openNav('CusNav')"><span>Customers</span></button>
			<button class="button" style="vertical-align:middle" onclick="openNav('DesNav')"><span>Destinations</span></button>
			<button class="button" style="vertical-align:middle" onclick="openNav('TrNav')"><span>Trips</span></button>
			<button class="button" style="vertical-align:middle" onclick="openNav('DrNav')"><span>Drivers</span></button>
		</div>
		<div>
			<a href="logout.php">Log out</a>
		</div>
	<script>
		function openNav(navname) {
			document.getElementById(navname).style.width = "100%";
		}

		function closeNav(navname) {
			document.getElementById(navname).style.width = "0%";
		}
	</script>
		<div>
			<p>Created by Group 2.</p>
		</div>
	</body>
</html>