<?php
include("dashboard_1.php");
?>
<!-- <!DOCTYPE html>
<html>-->
<head> 
<title>Checkout</title>
<link rel="icon" href="images/cart1.png">
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
</head>

<body id="checkout-page">
<br><br>
<div class="d1" style="background-color: white; width: 80%;height: 90%;margin-left: 150px;">
<div id="site">
	<header id="masthead">
	</header>
	<div id="content">
		<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart"  style="text-align:center;border-width: 30px;background-color:#b255e0">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody style="background-color:#8adbb8;">
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: Rs.0.0</span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <form action="order.php" method="post" id="checkout-order-form">
		 	<h2>Your Details</h2>
		 	
		 	<fieldset id="fieldset-billing" style="outline: 10px;border-width: 15px;background-color: #d1d8eb;border-color: #f2a7c4;">
		 		<legend>Billing Address</legend>
		 		<div>
		 			<label for="name"> Name</label>
		 			<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" placeholder="Enter your Name" style="width:600px;height: 50px;font-size:15px" /><br>
		 			<hr>
		 		</div>
		 		
		 		<div>
		 			<label for="email">Email</label>
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" placeholder="Enter E-mail-as abc@gmail.com"style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="city">City</label>
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="address">Address</label>
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px" /><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="zip">Pin Code</label>
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="country">Country</label>
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px">
		 				<option value="">Select</option>
		 				<option value="IN">India</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>
		 	
		 	<fieldset id="fieldset-shipping" style="background-color: #d1d8eb;border-width: 15px;border-color: #f2a7c4;">
		 		
		 		<legend>Shipping Address</legend>
		 		
		 		<div>
		 			<label for="name"> Name</label>
		 			<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" placeholder="Enter your Name" style="width:600px;height: 50px;font-size:15px" /><br>
		 			<hr>
		 		</div>
		 		
		 		<div>
		 			<label for="email">Email</label>
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" placeholder="Enter E-mail-as abc@gmail.com"style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="city">City</label>
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="address">Address</label>
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px" /><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="zip">Pin Code</label>
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px"/><br>
		 			<hr>
		 		</div>
		 		<div>
		 			<label for="country">Country</label>
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty" style="width:600px;height: 50px;font-size:15px"><br>
		 			<hr>
		 				<option value="">Select</option>
		 				<option value="IN">India</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<p><input type="submit" id="submit-order" value="Submit" class="btn" style="width:200px;height:50px;font-size: 20px;border-radius:10px;cursor: pointer;margin-left: 350px;" /></p>
		 </form>
	</div>
	
	

</div>

<footer id="site-info">
		Copyright &copy;TechGun
	</footer>
</div>
<?php
  include("dashboard_2.php");
?>

    

