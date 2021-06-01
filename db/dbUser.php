<?php

function Search($username, $psw) {
    $db = new SQLite3("database.db");
    $stmt = $db->prepare("SELECT * FROM 'User' WHERE username = :username");
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();
    //echo "hej";
    //echo gettype($result);
    $row = $result->fetchArray();
    if(sha1($row['salt'] . $psw) == $row['passwordhash']){
        echo "lyckad";
        header('Location: ../index.php');
        if(!isset($_SESSION['username'])){
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $row['userID'];
            $_SESSION['userType'] = $row['userType'];
        }
    }
    else{
        echo "<script>alert('Login failed')</script>";
        header('Location: ../login.php');
    }
}

function FindUserTypeByUserId($userID){
    $db = new SQLite3("database.db");
    $sql = "SELECT * FROM 'User' WHERE userID = :userID";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userID', $userID, SQLITE3_TEXT);
    $result = $stmt->execute();

    $row = $result->fetchArray();

    return $row['userType'];
}

function FindIdByUsername($username){
    $db = new SQLite3("database.db");
    $sql = "SELECT * FROM 'User' WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();

    $row = $result->fetchArray();

    return $row['userID'];

}

function FindEmailByUserId($userId){
    $db = new SQLite3("database.db");
    $sql = "SELECT * FROM 'User' WHERE userID = :userID";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userID', $userID, SQLITE3_TEXT);
    $result = $stmt->execute();

    $row = $result->fetchArray();

    return $row['email'];
}



function isUserInDB($username){
    $db = new SQLite3("database.db");
    $stmt = $db->prepare("SELECT * FROM 'User' WHERE username = :username");
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();
    $row = $result->fetchArray();
    if($row['username'] == $username){
        return true;
    }
    else{
        return false;
    }
}

function isEmailInDB($email){
    $db = new SQLite3("database.db");
    $stmt = $db->prepare("SELECT * FROM 'User' WHERE email = :email");
    $stmt->bindParam(':email', $email, SQLITE3_TEXT);
    $result = $stmt->execute();
    $row = $result->fetchArray();
    if($row['email'] == $email){
        return true;
    }
    else{
        return false;
    }
}

function SaltGeneration(){
    return substr(sha1(mt_rand()), 0, 22);
}


function AddComment($salt){

    $password = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];    
    $passwordhash = sha1 ($salt . $password);
    $userType = 0;

    $db = new SQLite3("database.db");
    $sql = "INSERT INTO 'User' ('username', 'email', 'passwordhash', 'salt', 'userType') VALUES (:username, :email, :passwordhash, :salt, :userType)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT); 
    $stmt->bindParam(':email', $email, SQLITE3_TEXT);
    $stmt->bindParam(':passwordhash', $passwordhash, SQLITE3_TEXT);
    $stmt->bindParam(':salt', $salt, SQLITE3_TEXT);
    $stmt->bindParam(':userType', $userType, SQLITE3_TEXT);

    if($stmt->execute()){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    }

}


function Show(){

$db = new SQLite3("database.db");
$result = $db->query("SELECT comment, name FROM 'Comments' ORDER BY commentID");
    
while ($row = $result->fetchArray())
{
    echo "<h4>" . $row['comment'] . "</h4>" ;
    echo "Skriven av: " . $row['name'];
    
    echo "<br><br><br><br>";
    
}
$db->close();

}

function FindUsernameByUserID($userID) {
    $db = new SQLite3("database.db");
    $sql = "SELECT * FROM 'User' WHERE userID = :userID";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userID', $userID, SQLITE3_TEXT);
    $result = $stmt->execute();

    $row = $result->fetchArray();

    return $row['username'];
}

function ShowUsers() {
    $db = new SQLite3("db/database.db");
$result = $db->query("SELECT userID, username, userType FROM 'User' ORDER BY userID");
    
while ($row = $result->fetchArray())
{
    echo "<h4>" . "  UserID: " . $row['userID'] . "  Username: " . $row['username'] . "  userType: " . $row['userType'] . "</h4>" ;
    echo "<form action='changeUserType.php' method='post'>";
    if($row['userType'] == 1) {
        echo "<button name='changeToUser' type='submit' value=" . $row['userID'] . ">Change to normal user </button> "; 
    
    }
    else {
        echo "<button name='changeToAdmin' type='submit' value=" . $row['userID'] . ">Change to admin </button> ";
    }
    echo "</form>";
        
    echo "<br><br><br><br>";
    
}
$db->close();

}

function ChangeToAdmin($userID) {
    
            $db = new SQLite3("database.db");
            $sql = "UPDATE 'User' SET username = :newUsername WHERE userID = :userID";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':userType', '1', SQLITE3_TEXT);
            $stmt->bindParam(':userID', $userID, SQLITE3_INTEGER);
            $stmt->execute();
            $db->close();
            
    }

}

function ChangeToUser($userID) {
    
    $db = new SQLite3("database.db");
    $sql = "UPDATE 'User' SET username = :newUsername WHERE userID = :userID";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':userType', '0', SQLITE3_TEXT);
    $stmt->bindParam(':userID', $userID, SQLITE3_INTEGER);
    $stmt->execute();
    $db->close();
    
}

}

/*
function UpdateUserType($userID, $userType) {
    $db = new SQLite3("database.db");
    $sql = $db->prepare("UPDATE 'User' SET userType = :userType WHERE userID = :userID");
    $sql->bindParam(':userID', $userID, SQLITE3_TEXT);
    $sql->bindParam(':userType', $userType, SQLITE3_TEXT);
    $sql->execute();
}


   */




?>