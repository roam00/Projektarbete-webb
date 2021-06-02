
<ul>
    <li><a href="index.php">Home</a></li>
    <?php

        if(isset($_SESSION['username'])){
            echo "<li style='float: right;'><a href='profile.php'>My profile</a></li>
            <li style='float: right;'><a href='logout.php'>Log out</a></li>";
        }
    ?>
</ul>


</form>