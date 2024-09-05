<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		header('location:../login.php');
	}

	include '../database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrasi - Rumah Makan Padang Gemilang</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,700&display=swap');
		* {
			padding: 0;
			margin: 0;
		}
		body {
			font-family: 'Nunito Sans', sans-serif;
			background-color: #EBEBE8;
		}
		a {
			color: inherit;
			text-decoration: none;
		}

		/* navbar */
		.navbar {
			padding: 0.5rem 1rem;
			background-color: black;
			color: white;
			position: fixed;
			width: 100%;
			top: 0;
			left: 0;
			z-index: 99;
			display: flex;
		}
		.navbar h1 {
			margin-left: 15px;
			font-size: 20px;
			line-height: 20px;
		}

		/* sidebar */
		.sidebar {
			position: fixed;
			width: 250px;
			top: 0;
			bottom: 0;
			background-color: white;
			padding-top: 40px;
			transition: 0.5s;
			z-index: 98;
		}
		.sidebar-hide {
			left: -250px;
		}
		.sidebar-show {
			left: 0;
		}
		.sidebar-body {
			padding: 15px;
		}
		.sidebar-body h2 {
			margin-bottom: 8px;
		}
		.sidebar-body ul {
			list-style: none;
		}
		.sidebar-body ul li a {
			width: 100%;
			display: inline-block;
			padding: 7px 15px;
			box-sizing: border-box;
		}
		.sidebar-body ul li a:hover {
			background-color: #EBEBE8;
			color: white;
		}
		.sidebar-body ul li:not(:last-child) {
			border-bottom: 1px solid #ccc;
		}

		/* content */
		.content {
			padding: 60px 0;
		}
		.container {
		  	width: 960px;
		  	margin-left: auto;
		  	margin-right: auto;
		}
		.page-title {
		  	margin-bottom: 15px;
		}
		.card {
			border: 1px solid;
		 	background-color: white;
		  	padding: 15px;
		  	border-radius: 5px;
		}
		.table {
  			width: 100%;
  			border-collapse: collapse;
  			margin-top: 8px;
		}
		.table thead th,
		.table tbody td {
		  	border: 1px solid;
		  	padding: 3px;
		}
		.btn-t {
			border: 1px solid;
			padding: 3px 8px;
			display: inline-block;
			color: white;
			background-color: #67595e;
			border-radius: 3px;
		}
		.input-group {
  			margin-bottom: 8px;
		}
		.input-group label {
		    display: block;
		    margin-bottom: 5px;
		}
		.input-control {
		    width: 100%;
		    box-sizing: border-box;
		    padding: 0.5rem;
		    font-size: 1rem;
		}
		.btn-submit {
		    border: 1px solid #67595e;
		    padding: 5px 20px;
		    display: inline-block;
		    color: white;
		    background-color: #67595e;
		    border-radius: 3px;
		    font-size: 1rem;
		    cursor: pointer;
		}
		.btn-back {
		    border: 1px solid;
		    padding: 5px 20px;
		    display: inline-block;
		    border-radius: 3px;
		    font-size: 1rem;
		    cursor: pointer;
		}

	</style>
</head>
<body>

	<!-- navbar -->
	<div class="navbar">
		<a href="#" id="btnBars">
			<i class="fa fa-bars"></i>
		</a>
		<h1>Admin Rumah Makan Padang Gemilang.</h1>
	</div>

	<!-- sidebar -->
	<div class="sidebar sidebar-hide">
		<div class="sidebar-body">
			
			<h2>Navigasi</h2>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="users.php">User</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="qrcode.php">QR Code</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>

		</div>
	</div>