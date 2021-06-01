
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="randomize_activity.php">Randomize activity</a></li>
    <?php
        if(!isset($_SESSION['username'])){
            echo "<li style='float: right;'><a href='login.php'>Log in</a></li>
            <li style='float: right;'><a href='register.php'>Sign up</a></li>";
        }
        if(isset($_SESSION['username'])){
            echo "<li><a href='showDataTable.php'>See date combinations</a></li>";
            echo "<li><a href='latest10.php'>Latest 10 </a></li>";
            echo "<li style='float: right;'><a href='profile.php'>My profile</a></li>
            <li style='float: right;'><a href='logout.php'>Log out</a></li>";
        }
        
        ?>
</ul>


</form>