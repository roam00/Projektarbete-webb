<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    <META CHARSET="UTF-8">
    </HEAD>
    <BODY>

    <!-- används för att skriva ut errormdeelaenaden från javascript-->
    <div id="error"></div>
    <div class = "log_in_box">
        <form action="./db/loginverification.php" onsubmit="return validate_login()" method="post" id="formId">
            <label for="uname"></label>
            <input class = 'input' type="text" id="username" name="username" placeholder="Username"><br><br>
            <label for="password"></label>
            <input class = 'input' type="password" id="password" name="password" placeholder="Password"><br><br>
            <button class= 'button' type = 'submit'>Log in</button>
        </form>
    </div>
<script src="./js/script.js"></script>
    </BODY>
</HTML>