
<ul>
    <?php

        if(isset($_SESSION['username'])){
            echo "<li style='float: right;'><a href='profile.php'>My profile</a></li>
            <li style='float: right;'><a href='logout.php'>Log out</a></li>";
            echo "<li><a href='homepage.php'>Home</a></li>";
        }

        else {
            echo "<li><a href='index.php'>Back</a></li>";
        }
    ?>
</ul>


</form>