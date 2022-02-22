<?php
include("dashboard_1.php");
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

 if(isset($_POST["sub"]))
 {
	$c=$_POST["txtemail"];

	
		// $q="INSERT INTO `signup`(`name`, `phone`, `email`, `pass`,'otp') VALUES ('$a','$b','$c','$d','$f');";
	 //    $r=mysqli_query($con,$q);
	 //    if($con==$q)
	    // {
     //       echo "";
	    // }else{

	   
 		
		$put="Dear Customer,"."<br>"."<br>"."<b>Your order has been placed Sucessfully!!our team reach you soon."."<br>"."===Happy Shoping==="."<br>"."<br>"."Regards"."<br>TechGun Team</b>";

		

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
    $mail->Subject = 'Online Shoping Center';
    $mail->Body    = $put;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}



?>
<br><br>
<html>
<head>
	<title>order material</title>
	<link rel="icon" href="images/cart1.png">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#e4f2e8">
<br><br><br><br><hr><br><br><br><br>

<form action="product.php" method="post" onsubmit="return abc()" name="p1">
<center>
<table width="100%" border="0">
	<span><b>CONFIRM YOUR ORDER NOW</b></span>
	<tr>
		<td><label>Confirm Your E-mail</label></td>
	</tr>
	<tr>
		<td style="font-size:20px;text-align: center;background-color: #d5a5d6">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtemail" placeholder="Enter your email here" required="required" style="width:40%; height: 30px;outline: none;border: none;font-size: 15px;"></td>
	</tr><br><br>
	<tr>
		<td>&nbsp;&nbsp;<br><br><input type="submit" name="sub" value="Order Now" onsubmit=" return xyz()" style="width:10%; height: 30px;font-size: 20px;background-color: #afcf59;outline: none;border-radius: 5px;cursor: pointer;margin-left: 700px;">
	  </td>
	</tr>
	</form>
</table>
</fieldset>
</center>

<script>
  	function abc()
		{
			if(document.p1.txtemail.value=="")
	    {
	    	alert("Enter your E-mail id");
	    	return false;
	    }
	    else (document.p1.sub.value=="Fill")
	    {
           alert("Placed Successfully!!");
           return true;
	    }
	}
  </script>
  <?php
include("dashboard_2.php");
?>