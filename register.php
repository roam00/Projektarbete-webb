<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <META CHARSET="UTF-8">
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    </HEAD>
    <BODY>
    
    <?php
    session_start();
    if(isset($_SESSION['username'])){
    header("Location: index.php");
}
else{
    if(isset($_SESSION['error'])){
        $err = $_SESSION['error'];
        foreach($err as $value){
            echo $value . "<br>";
        }
    }
}

?>

    <div id="wrapper">
    <form name="myform" method="post" onsubmit = "return validate_registration()" action="./db/userValidation.php">
    <label for="username"></label>
    <input type="text" id="username" name="username" placeholder="Username"><BR>
    <label for="email"></label>
    <input type="text" id="email" name="email" placeholder="Email"><BR>
    <label for="password"></label>
    <input type="password" id="password" name="password" placeholder="Password"><BR>
    <label for="reppassword"></label>
    <input type="password" id="reppassword" name="reppassword" placeholder="Repeat password">
    <br>
    <br>
    <input type="submit" value="Register account" id="send">
    </form>
    </div>
    <script src="./js/script.js"></script>
    </BODY>
</HTML>