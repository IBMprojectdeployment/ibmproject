<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

 if(isset($_POST["sub"]))
 {
  $a=$_POST["txtname"];
	$b=$_POST["txtphone"];
	$c=$_POST["txtemail"];
	$d=$_POST["txtmsg"];
$con=mysqli_connect("localhost","root","","ibmproject");
	
		$q="INSERT INTO `contact us`(`usname`, `usphone`, `usemail`, `usmsg`) VALUES ('$a','$b','$c','$d');";
	    $r=mysqli_query($con,$q);
	    if($con==$q)
	    {
           echo "";
	    }else{

	   
 		
		$put="Dear Customer,"."<br>"."<b>Thank you for contact Us!!Our team member reach you soon."."<br><br>===Happy shoping==="."<br><br><br>Regards"."<br>TechGun Team";

		

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
    //Server settings
    $mail->SMTPDebug =0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pekaysoren613@gmail.com';                     // SMTP username
    $mail->Password   = 'Soren@babu';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pekaysoren613@gmail.com', 'Sameer');
    $mail->addAddress($c);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Online shoping center';
    $mail->Body    = $put;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Dream construct</title>
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
<span class="btn active" style="cursor: pointer;" onclick="document.getElementById('text').style.fontSize='1em'">A-  |</span>
	 <span class="btn" style="cursor: pointer;" onclick="document.getElementById('text').style.fontSize='1.15em'">A  |</span>
	 <span class="btn" style="cursor: pointer;" onclick="document.getElementById('text').style.fontSize='1.5em'">A+</span>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="#nav-bar">Go to navigation</a></span>
<style type="text/css">
	<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br /><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
<h1> WELCOME YOU</h1>
<div id="text">
<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light" >
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<img src="images/logo2.gif">
  	
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
    	<li class="nav-item">
  		<a style="color:black;" class="nav-link" href="index.php">Home</a>
		</li> 
  	     <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#contact">Contact Us</a>
      		</li>
      		
      		
    		</ul>
  		</div>
  		<div class="collapse navbar-collapse" id="navbarNav">
  			<ul class="navbar-nav ml-auto">
  	     <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="login.php">User Login</a>
      		</li>
      	</ul>
  		</div>
		</nav>


	<div class="slider">
		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/banner1.jpeg" class="d-block w-100" alt="..." style="width:400px;height:600px;">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/banner2.jpeg" class="d-block w-100" alt="..." style="width:400px;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="images/banner3.jpeg" class="d-block w-100" alt="..." style="width:400px;height:600px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
		




	<!------Featured Categories----->
	<section class="featured-categories">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<img src="images/img1.jfif">
				</div>
				<div class="col-md-3">
				<img src="images/img2.jfif">
				</div>
				<div class="col-md-3">
				<img src="images/img3.jfif">
				</div>
				<div class="col-md-3">
				<img src="images/img4.jfif">
				</div>
				
			
			</div>
		
		</div>
	</section>
	
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
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
				<form class="add-to-cart" action="login.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
							<input type="number" name="qty-2" id="qty-2" class="qty" value="1" max="5" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
						</div>
			     </div>
			   </div>	
		  </div>
    </div>
  </div>
</section>
<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
			Construction comes from the word ''construct,'' which means ''to build.'' Building a sand castle, a fort out of pillows, or a house of cards are all examples of constructing something. In engineering terms, construction is usually associated with large structures like houses, railways, and power plants.

In terms of engineering, construction is the activity of putting together different elements, using a detailed design and plan, to create a structure for a certain location. When you construct large structures, you need to have a clear plan of how you're going to do that. You also need to know the specific location. Architects and engineers design and build the structure with that location in mind.

				</div>
			<button type="button" class="btn btn-primary">Read More>>
			
			</button>
			
			</div>
			<div class="col-md-6 skills-bar">
			<p>Delivery Rate</p>
			<div class="progress">
			<div class="progress-bar" style="width:85%;">85%</div>
			</div>
			
			<p>Customer Growth</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			
			<p>Happy Customer</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			</div>
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> 24/7 Support</h3>
					<p>on order related queries</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Return within 30 days</h3>
					<p>of receiving your order</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get free delivery</h3>
					<p></p>
				</div>
			</div>
		</div>
	
	</section>
	


<!-----Team------->
<section id="team">
	
	<div class="container">
		<h1>Our Team</h1>
		<div class="row">
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="images/photo.jpg" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>PEKAY SOREN</h2>
				<h3>Web Developer</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>PRINCE KUMAR </h2>
				<h3>DESIGNER</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>SAYAN DAS</h2>
				<h3></h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<img src="" class="img-responsive">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>SAMEERAN RAOUT</h2>
				<h3></h3>
				
			</div>
		</div>	
	</div>
	
</section>

<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form" method="post">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Your Name.." name="txtname">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Phone no." name="txtphone">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email.." name="txtemail">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Message.." name="txtmsg"></textarea>
				</div>
			
				<button type="submit" name="sub" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>NSTI,Dasnagar,Howrah,Kolkata 711105</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+91)7606904223</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>techGun@gmail.com</div>
				
				
				<div class="follow"><label><b>Get Social </b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
			 </div>
			</div>
		</div>
	</div>
</section>
<table border="0" width="100%">
<tr>
    <td style="color:brown;" colspan="6" align="center"><h1>
        <hr><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d59005.649027565014!2d86.2970835!3d22.4345556!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1642745829040!5m2!1sen!2sin" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
       <h3>Copyright:All right reserved</h3><h2>Design By:G35 TechGun team</h2></td>
</tr>
</table> 
</div>
</body>
</html>	
