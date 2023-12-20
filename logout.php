<?php
setcookie("userSigned", "", time() - 3600);
$_COOKIE['userSigned'] = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h5>Logout successfull</h5>
    <?php  echo $_COOKIE['userSigned'];?>
    
</body>
</html>