<?php
include("dashboard_1.php");
?>
<!-- <!DOCTYPE html>
<html> -->
<head>
<title>Your Order</title>
<link rel="icon" href="images/cart1.png">
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
</head>

<body id="checkout-page">
<br><br>
<div style="background-color: #ccdbce; width: 80%;height: 80%;margin-left: 150px;">
<div id="site">
	<header id="masthead">
	</header>
	<div id="content">
		<h1>Your Order</h1>
			<table id="checkout-cart" class="shopping-cart" style="text-align:center;background-color: #c79de0;outline: 40px;outline-color: black;border-width: 30px;">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody style="background-color: #eddfb4">
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h2>Your Data</h2>
		 	<div id="user-details-content" style="background-color: #95b7cf"></div>
		 </div>
		 
		 
		 
		 
 <form  action="Confermmsg.php" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="business" value="" />
        
	<input type="hidden" name="currency_code" value="" />
	<a href="Confermmsg.php"><input type="submit"  class="btn" name="sub" value="Buy Now" style="width:200px;height:50px;font-size: 20px;border-radius:10px;cursor: pointer;margin-left: 350px;" /></a>		 
		 
	</div>
</form>
     
	
	
</div>
</div>

<footer id="site-info">
		Copyright &copy;TechGun
	</footer>

<?php
include("dashboard_2.php");
?>
   
