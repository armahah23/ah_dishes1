<?php
setcookie("userSigned", "", time() - 3600);
$_COOKIE['userSigned'] = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles_logout.css">
  <title>Thank You | AH-Dishes</title>
</head>
<body>
  <div class="container">
    <h1>Thank You for Visiting!</h1>
    <p>Your presence added a special touch to our kitchen.
         We can't wait to welcome you back for another delightful dining experience. 
        Explore more tantalizing tastes with us on our website. Your next extraordinary meal awaits!</p>
    
    <!-- Re-visit Home Button -->
    <a href="index.php" class="home-button">Re-visit Home</a>

    <!-- Moving Photos -->
    <div class="photo-slider">
      <img src="Thanks/image_1.png" alt="Photo 1">
      <img src="Thanks/image_2.png" alt="Photo 2">
      <img src="Thanks/image_3.png" alt="Photo 3">
      <img src="Thanks/chef.jpg" alt="Photo 4">
    </div>
    <div class="logo-rest">
        <img src="logoF.png" alt="rest-logo">
    </div>
  </div>
    <?php  echo $_COOKIE['userSigned'];?>
  <script src="script_logout.js"></script>
</body>
</html>


