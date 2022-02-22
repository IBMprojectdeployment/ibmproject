<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="dashboard.css">
   </head>
<body>
  <?php
   session_start();
   ?>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Precision buid</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard_1.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</a></span>
          </a>
        </li>
         <li>
          <a href="cart.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Cart Details</span>
          </a>
        </li>
         <li>
          <a href="checkout.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Checkout</span>
          </a>
        </li>
        <li>
          <a href="order.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
         <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <a href="cart.php">
      <div class="sidebar-button">
        <i class="fa fa-shopping-cart"></i>
        <p id="span"><b></b></p>
        <span class="dashboard">Cart</span>
      </div></a>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"></span>
        Welcome&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['Name'];?>
      </div>
    </nav>

    

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

