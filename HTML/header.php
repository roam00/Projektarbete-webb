
<ul>
    <?php

        if(isset($_SESSION['username'])){
            echo "<li style='float: right;'><a href='profile.php'>My profile</a></li>
            <li style='float: right;'><a href='logout.php'>Log out</a></li>";
            echo "<form action = 'homepage.php'><button class = 'back_button'>←</button></form>";
        }

        else {
            echo "<form action = 'index.php'><button class = 'back_button'>←</button></form>";
            
        }
    ?>
</ul>


</form>