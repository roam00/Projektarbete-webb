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
    <form name="myform" method="post" onsubmit = "return validate_form()" action="./db/userValidation.php">
    <label for="username"></label>
    <input type="text" id="username" name="username" placeholder="Namn"><BR>
    <label for="email"></label>
    <input type="text" id="email" name="email" placeholder="E-postadress"><BR>
    <label for="password"></label>
    <input type="text" id="password" name="password" placeholder="Lösenord"><BR>
    <label for="reppassword"></label>
    <input type="text" id="reppassword" name="reppassword" placeholder="Repetera lösenord">
    <br>
    <br>
    <input type="submit" value="Registrera dig" id="send">
    </form>
    </div>
    <script src="./js/script.js"></script>
    </BODY>
</HTML>