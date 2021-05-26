<?php

session_start();
if(!($_SESSION['userType'] == 1)){
    
    header('Location: login.php');
    
    die();
    echo "You have to log in to access that page";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1> Hi <?php echo $_SESSION['username']; ?> </h1>

</body>

</html>