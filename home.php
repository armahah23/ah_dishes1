<!DOCTYPE html>
<html lang="en">

<head>
    <title> Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <!-- Social media connection link-->

    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <script>
        function logout() {
            alert("You are logged out successfully");
            window.location = "http://localhost/ah-dishes/ah_dishes/logout.php";
        }
    </script>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="logoF.png" class="logo">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="dishes.html">Dishes</a></li>
                <li><a href="offers.html">Offers</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="#" onclick="logout()">Logout</a></li>

            </ul>
        </div>


        <div class="content">
            <h1>AH Dishes Resturent</h1>
            <p> Come for the food, stay for the memories – AH Dishes,
                where every meal is a celebration of family and flavor.</p>
            <div class="reg">
                <button type="button"><span></span><a href="visit.html"> Inside</a></button>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-content">
                <h2> "Epicurean Pleasures Await You." </h2>
                <p> Thank you for joining us at AH Dishes. Explore a world of culinary excellence where each dish tells a unique story.
                    From sizzling starters to decadent desserts, our menu is a journey through flavors crafted with passion.
                    Follow us on social media for the latest updates, and share your culinary adventures using #AhDishes. Your satisfaction is our inspiration. </p><br>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div><br>
            <div class="footer-bottom">
                <p> All rights reserved by &copy; afrih.arm@.2023</p>
            </div>
        </div>
    </footer>
</body>

</html>