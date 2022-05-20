<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <a href="http://localhost/Lab5/indeks.php">Home</a>
    <?php
    require_once("funkcje.php");
    if(isset($_GET["utworzCookie"]) and !empty($_GET["czas"])){
    
    setcookie("ciasteczko", $_GET["czas"], time() + $_GET["czas"], "/");
    echo "utworzono ciasteczko";
}
else { header("Location: indeks.php");}

    ?>

</body>

</html>