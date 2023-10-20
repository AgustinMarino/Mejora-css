<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<header class="header">
   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">  <h3>CREAT <span style="color: rgb(191, 22, 140);">3D</span></h3></a>
         
         <nav class="navbar">
            <a href="home.php">Inicio</a>
            <a href="shop.php">Galeria</a>
            <a href="contact.php">Contactenos</a>
            <a href="orders.php">Ordenes</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>
         <div class="user-box">
            <p>Usuario : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
            <a href="settings.php" class="fas fa-search"></a>
         </div>
      </div>
   </div>

</header>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
    <p>manaos</p>
</body>
</html>