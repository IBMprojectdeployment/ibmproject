<?php
include("dashboard_1.php");
  ?>
<!-- <!DOCTYPE html>
<html>-->
<head>
<title>Your Shopping Cart</title>
<link rel="icon" href="images/cart1.png">
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
</head>

<body bgcolor="#c2b8a5">
 
 <br><br>
<div id="site">
	<header id="masthead">
	</header>
	<div id="content">
		<h1>Your Shopping Cart</h1>
		<form id="shopping-cart" action="cart.php" method="post">
			<table class="shopping-cart"  style="text-align:center;border: 30px;background-color: #c79de0;outline: 40px;outline-color: black;border-width: 30px;">
			  <thead>
				<tr>
					<th scope="col">Item</th >
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody style="background-color: #eddfb4">
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong><span id="stotal"></span>
			</p>
			<ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" style="width:150px;height: 50px;border-radius: 25px;font-weight: bolder;font-size: 15px;cursor: pointer;" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart"  style="width:150px;height: 50px;border-radius: 25px;font-weight: bolder;font-size: 15px;cursor: pointer;" />
				</li>
				<li>
					<a href="checkout.php">
					<input type="button" name="delete" class="btn" value="Checkout Now"  style="width:150px;height: 50px;border-radius: 25px;font-weight: bolder;font-size: 15px;cursor: pointer;" />
					</a>
				</li>
			</ul>
		</form>
	</div>
	
	

</div>

<footer id="site-info">
		&copy;2022 All right Copyright 
	</footer>

<?php
include("dashboard_2.php");
?>
