<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
  <link rel="icon" href="images/cart1.png">
</head>
<body bgcolor="#c3b2d4">
<table border="0" width="100%"  height="100px" bgcolor="#2874F0">
  <tr>
      <th><label style="font-size: 40px;font-family:cursive;color:white;margin-right: 500px;">BUILDING BUILDER</label><br><font color="white" style="font-family: serif;font-size: 20px;margin-right: 500px;">Build your Dream Home</font></th>
    <th><h3><a href="index.php"><font color="white"><--Back home</h3></font></a></th>
    </tr>
</table>
	<img src="images.png" width="50%" height="100%" style="margin-top:-20px;text-align: right;">
<form method="post">  
<center>
<div style="margin-top: -30%;margin-left: 600px; height:300px; background-color:#dce3de;width: 30%;padding-top:100px;padding-right: 70px;box-shadow: 15px 14px 12px white;border-radius:20px;">
	<img src="images/img.png" width="80px" height="80px" style="margin-top: -60px">
	<h1>Login</h1>
	<label style="font-weight: bold;outline: none;color: black">USERNAME</label>  
	<input type="text" name="txtuser" placeholder="Enter Username here" style="width:70%;height: 20px;outline: none;border-radius:20px;"><br><br>
 
	<label style="font-weight: bold;color: 	black">PASSWORD</label>
	<input type="Password" name="txtpass" placeholder="Enter password here" style="width:70%;height: 20px;outline: none;border-radius:20px;"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="sub1" value="Login" style="width:25%;height: 40px;border-radius: 5px;background-color: #b58ccf;cursor: pointer; font-size: 20px">&nbsp;&nbsp;<br><br>
	<label><b>New Register?<a href="signup.php">Create an account.</a></b></label>
    
    </form>
    <?php
    if(isset($_POST["sub1"]))
    {
      $con=mysqli_connect("localhost","root","","ibmproject");
      $un=$_POST["txtuser"];
      $pass=$_POST["txtpass"];
      if($con)
      	$q="SELECT * FROM `signup` WHERE email='$un' and pass='$pass' ";
      	$r=mysqli_query($con,$q);
      	$c=mysqli_num_rows($r);
      if($c>0)
      {
        session_start();
        $_SESSION["un"]=$un;
        while($f=mysqli_fetch_array($r))
        {
           
          $Name=$f[0];
          
        }
        $_SESSION["Name"]=$Name;
        
  
       header("location:dashboard.php");
      }
      else 
      {
        echo "<div background-image:linear gradiant(red,yellow);width:40%;height:40px;'><button style='margin-top:150px;height:20px;'>INVALID LOGIN</button></div>";
      }
  
     
      
    }

    ?>
    <footer>
    	<div style="width:300px; height:200px;border:2px">
    		
    	</div>
    </footer>
    </div>
	</fieldset>
	<center>
</body>
</html>