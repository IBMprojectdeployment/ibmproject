
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <table border="0" width="100%"  height="100px" bgcolor="#2874F0">
 <tr>
     <th><label style="font-size: 40px;font-family:cursive;color:white;margin-right: 500px;">BUILDING BUILDER</label><br><font color="white" style="font-family: serif;font-size: 20px;margin-right: 500px;">Choose your Dream Home</font></th>
    <th><h3><a href="index.php"><font color="white"><--Back home</h3></a></th>
    </tr>
</table>
<img src="images.png" width="50%" height="100%" style="margin-top:-20px;text-align: right;">
  <div class="container">
    <div class="title"><h2>User Sign up</h2></div>
    <div class="content">
      <form action="#" name="p1" method="post" onsubmit="return abc()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" required name="txtname1">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" required name="txtname2">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required data-name="abc@gmail.com required" name="txtemail"autocomplete="off" oncopy="return false;" onpaste="return false;"size="20" maxlength="30">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="txtphone" maxlength="10">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="Password" placeholder="Enter your password" required name="txtpass" minlength="4">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="Password" placeholder="Confirm your password" required minlength="4">
          </div>
        </div>
         <table><tr>
    <td style="text-align: center;"><input type="checkbox" name="txtcheck" style="height: 15px;width: 30px" required='required'><b>I accept the term of use.</b></td>
    </tr></table>
        <div class="button">
          <input type="submit" value="Register" name="sub">

        </div>

      </form>

    </div>
    Already have an account?<h2><a href="login.php">Login</a></h2>
  </div>

</body>
</html>
<?php
 if(isset($_POST["sub"]))
 {
  
  $a=$_POST["txtname1"];
  $b=$_POST["txtname2"];
  $c=$_POST["txtemail"];
  $d=$_POST["txtphone"];
  $e=$_POST["txtpass"];
  $con=mysqli_connect("localhost","root","","ibmproject");
    $q="INSERT INTO `signup`(`first_name`, `last_name`, `email`, `phone`, `pass`) VALUES ('$a','$b','$c','$d','$e');";
      $r=mysqli_query($con,$q);
      if($con==$r)
      {
        echo "";
      
      }
      else 
      {
          echo "";
      }
      }
  ?>
  <script>
    function abc()
    {
      if(document.p1.txtname1.value=="")
      {
        alert("first Name required");
        return false;
      }
      else if(document.p1.txtname2.value=="")
      {
        alert("last Name required");
        return false;
      }
      if(document.p1.txtemail.value=="")
      {
        alert("Email required");
        return false;
      }
      else if(document.p1.txtphone.value=="")
      {
           alert("Phone no required");
           return false;
      }
      else if(document.p1.txtpass.value=="")
      {
        alert("password required");
        return false;
      }
      
    else
    {
      
      alert("Register Successfully!!");
    }
      }
  </script>