<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <h1>Nasz system</h1>

    </br>
    <?php
    if (isset($_POST["wyloguj"])) {
        $_SESSION["zalogowany"] = 0;
        echo "wylogowano!";
    }
    ?>
    <form action="logowanie.php" method="post">
        <table>
        <tr>
                <td><b> Zaloguj się!</b></td>
            </tr>
            <tr>
                <td> Login:</td>
                <td><input type="text" name="login"> </td>
            </tr>
            <tr>
                <td> Hasło:</td>
                <td><input type="text" name="haslo"> </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Zaloguj" name="zaloguj"></td>
            </tr>
        </table>
    </form>
    </br>
    <form action="cookie.php" method="get">
        <table>
            <tr>
                <td><b> Utwórz swoje ciasteczko!</b></td>
            </tr>
            <tr>
                <td><input type="number" name="czas"></td>
                <td>Podaj okres ważności</td>
            </tr>
            <tr>
                <td><input type="submit" value="ciastko" name="utworzCookie"> </td>
            </tr>
        </table>
    </form>

    <?php
    $cookie_name = "ciasteczko";
    if (!isset($_COOKIE[$cookie_name])) {
        echo "COOKIE '" . $cookie_name . "'nie istnieje!";
    } else {
        echo "COOKIE '" . $cookie_name . "' znalezione!<br>";
        echo "Żywotność: " . $_COOKIE[$cookie_name];
    }
    ?>


</body>



</html>