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
            include "HTML/header.php";
        ?>
        <div class = "log_in_box">
            <form name="myform" method="post" onsubmit = "return validate_registration()" action="./db/userValidation.php">
                <label for="username"></label>
                <input class = 'input' type="text" id="username" name="username" placeholder="Username"><br><br>
                <label for="email"></label>
                <input class = 'input' type="text" id="email" name="email" placeholder="Email"><br><br>
                <label for="password"></label>
                <input class = 'input' type="password" id="password" name="password" placeholder="Password"><br><br>
                <label for="reppassword"></label>
                <input class = 'input' type="password" id="reppassword" name="reppassword" placeholder="Repeat password"><br><br>
                <button class = 'button7' type="submit" value="Register account" id="send">Register</button>
            </form>
        </div>
    <script src="./js/script.js"></script>
    </BODY>
</HTML>