<?php
    require 'include/bored_results.php';
    require 'include/cocktail.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title> Welcome page </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php getCocktail(); ?>
<BR><BR>
<?php getBored(); ?>
</body>
</html>