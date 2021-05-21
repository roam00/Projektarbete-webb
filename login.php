<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="./css/style.css">
    <META CHARSET="UTF-8">
    </HEAD>
    <BODY>

    <!-- används för att skriva ut errormdeelaenaden från javascript-->
    <div id="error"></div>

<form action="./db/loginverification.php" onsubmit="return validate_login()" method="post" id="formId">
      <label for="uname"></label>
      <input type="text" id="username" name="username" placeholder="Användarnamn"><br><br>
      <label for="password"></label>
      <input type="text" id="password" name="password" placeholder="Lösenord"><br><br>
     <input type="submit" value="Logga in">
</form>
<script src="./js/script.js"></script>
    </BODY>
</HTML>