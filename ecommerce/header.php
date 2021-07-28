j<!DOCTYPE>
<?php 
session_start();
include("model/functions.php");
?>

<html>
<head>
	<title>My Online Shop</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/myCss.css">
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
	
	
	
</head>
<body>
	
	
	<div class="main_wrapper"><!--Main Container starts here-->
<!--Navigation Bar starts-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">

				<a class="navbar-brand" href="http://localhost:8080/ecommerce/index.php">SHOP</a>
				<a class="navbar-brand" href="http://localhost:8080/ecommerce/cart.php">CART</a>
				<a class="navbar-brand" href="http://localhost:8080/ecommerce/checkout.php">LOGIN</a>
				<a class="navbar-brand" href="http://localhost:8080/ecommerce/admin_area/insert_product.php">ADMIN</a>
				
				<img src="./images/hookADuckBlue.png" style="width: 400">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span></button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					</ul>

		<!--search bar-->
					<form method="get" class="form-inline my-2 my-lg-0" action="resultss.php" enctype="multipart/form-data">
						<input name="user_query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Searchh</button>
					</form>
				</div>
			</div>
		</nav><!--navigation-->
		
		
		
		<!--welcome note-->
		<div class="container"?>
				<div id="shopping_cart"> 
					<span style="font-size:17px; padding:5px; line-height:40px;">

						<?php
						if(isset($_SESSION['customer_email'])) {
							echo "<b>Hey <b>" . $_SESSION['customer_email'] . "<br><b style='color:black'> you</b>";
						}else {
							echo "<b>Hey guest </b>";
						}
						?>

					<b style="color:skyblue">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price:  <?php total_price()?><a href="cart.php" style="color:skyblue">Go to Carte</a>

						<?php
						if(!isset($_SESSION['customer_email'])) {
							echo "<a href='checkout.php' style='color:black'>Login</a>";
						}else {
							echo "<a href='logout.php' style='color:black'>Logout</a>";
						}
						?>
					</span>
				</div>
			</div>
