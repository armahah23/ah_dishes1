<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checkout</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="checkout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
</html>
<body>
<div class="row">
    <div class="col-75">
    <div class="container">
        <form action="checkout.php" method="post">
  
        <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your Name here">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="name@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="Your address here">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="City">
  
            </div>
        </div>
    </div>
  
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Card Name">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Expired Month">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="Year">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="xxx">
                </div>
              </div>
            </div>
  
          </div>
         
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
    <!--
    <div class="col-25">
      <div class="container">
        <h4>Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    -->

    


    </div>
  </div> 
  <!-- Cehck out -->
</body>