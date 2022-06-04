<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header>
   <div class="header-2">
      <div class="flex">
         <a href="home.php"><img id="gdsc--logo" src="https://dsc-logo-generator.web.app/dsc_icon-01.svg" alt="logo"></a>
         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            <a href="about.php">about</a>
         </nav>

         <div class="icons">
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'");
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="profile--user-form">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <div class="logout--section">
            <a href="profile.php"><button class="btn--profile">View profile</button></a>
            <a href="logout.php"><button class="btn--logout">Logout</button></a>
            </div>
         </div>
      </div>
   </div>

</header>