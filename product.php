<?php
include("dashboard_1.php");
?>
<!-- <!DOCTYPE html>
<html> -->
<head>
<title>Product Store</title>
<link rel="icon" href="images/cart1.png">
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<br>
	
<section class="new-arrivals">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>Personnal Protector</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/apron.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Apron</h3>
			<div class="product-description" data-name="Apron" data-price="599">
			  <p class="product-price">Rs.599/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/helmet.jpg">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Helmet</h3>
			<div class="product-description" data-name="Helmet" data-price="399">
				
				<p class="product-price">Rs.399/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/Safetyshoe.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Safetyshoe</h3>
			<div class="product-description" data-name="Safetyshoe" data-price="499">
				
				<p class="product-price">Rs.499/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/gloves.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Hand Glove</h3>
			<div class="product-description" data-name="Hand Glove" data-price="299">
				
				<p class="product-price">Rs.299/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>


  <div class="title-box">
		<h2>Industries Materials</h2>
		</div>
	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sand.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Sand</h3>
			<div class="product-description" data-name="Sand" data-price="1099">
				
				<p class="product-price">Rs.1099/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/brick.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Bricks</h3>
			<div class="product-description" data-name="Brick" data-price="799">
				
				<p class="product-price">Rs.799/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/cement.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Cement</h3>
			<div class="product-description" data-name="Cement" data-price="399">
				<p class="product-price">Rs.399/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/steel.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Steel</h3>
			<div class="product-description" data-name="Steel" data-price="699">
				
				<p class="product-price">Rs.699/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>
</div>
</section>
	
	
<section class="on-sale">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>Construction Materials</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/drill.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Drill</h3>
			<div class="product-description" data-name="drill" data-price="199">
				
				<p class="product-price">Rs.199/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/fileclubhummer.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Hummer</h3>
			
			<div class="product-description" data-name="Hummer" data-price="299">
				
				<p class="product-price">Rs.299/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/mixer machin.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>MixerMachine</h3>
			<div class="product-description" data-name="Mixer Machine" data-price="899">
				
				<p class="product-price">Rs.899/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/powertool.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Power Tool</h3>
			<div class="product-description" data-name="Power Tool" data-price="599">
				
				<p class="product-price">Rs.599/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/sledgehummer.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>SledgeHummer</h3>
			<div class="product-description" data-name="Sledge Hummer" data-price="299">
				
				<p class="product-price">Rs.299/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/rod.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Rod</h3>
			<div class="product-description" data-name="Rod" data-price="699">
				
				<p class="product-price">Rs.699/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/plaster board.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Plaster Board</h3>
			<div class="product-description" data-name="Plaster Board" data-price="899">
				
				<p class="product-price">Rs.899/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/copper wire.png">
				<div class="overlay-right">
					<button type="button" class="btn btn-secondary" title="Quick Shop">
					<i class="fa fa-eye"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Wishlist">
					<i class="fa fa-heart-o"></i>
					</button>
					
					<button type="button" class="btn btn-secondary" title="Add to Cart">
					<i class="fa fa-shopping-cart"></i>
					</button>
				</div>
			</div>
			
			
			<div class="product-bottom text-center">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>
			<h3>Copper Wire</h3>
			
			<div class="product-description" data-name="Copper Wire" data-price="399">
				
				<p class="product-price">Rs.399/-</p>
				<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" name="sub" id="sub1" onclick="cot()" /></p>
						</form>
						</div>
			     </div>
			   </div>	
		  </div>
    </div>
  </div>
</section>
<script type="text/javascript">
	var sub1=document.getElementById('sub1');
	var spn=document.getElementById('span');
let count=0;
function cot(){
	count+=1;
	document.getElementById('span').innerHTML=count;
	console.log(count);
}
</script>
<?php
include("dashboard_2.php");
?>