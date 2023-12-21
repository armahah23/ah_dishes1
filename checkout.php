<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '', 'ah-dishes');

if (!$con) {
    die("Failed to connect with database: " . mysqli_connect_error());
}

// get the post records
$tablename = "checkout_details";

// database insert SQL code
$sql = "INSERT INTO $tablename (Full_Name, Email, Address, City, Name_on_Card, Credit_Cart_Number, Exp_Month, Exp_Year, CVV) 
        VALUES ('$_POST[firstname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[cardname]','$_POST[cardnumber]','$_POST[expmonth]','$_POST[expyear]','$_POST[cvv]')";

// insert in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
    echo "alert('Your order has been placed successfully!')";
    header("Location: home.php");
} else {
    echo "Error: " . mysqli_error($con);
}


// close connection
mysqli_close($con);
?>