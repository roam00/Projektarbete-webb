<?php

include "dbUser.php";

echo "UserID: " . $_POST['userID'] . "";
echo "Username: " . FindUsernameByUserID($_POST['userID']) . "";
echo "Current userType: " . FindUserTypeByUserId($_POST['userID']) . "";




?>
