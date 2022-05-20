<?php session_start(); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<a href = "http://localhost/Lab6/form06_get.php">Lista Pracowników</a>
</br>
</br>
    <form action="form06_redirect.php" method="POST">
        id_prac <input type="text" name="id_prac">
        nazwisko <input type="text" name="nazwisko">
        <input type="submit" value="Wstaw">
        <input type="reset" value="Wyczysc">
    </form>


</body>

</html>

<?php
if (!empty($_SESSION)) {
    if ($_SESSION['warning'] == 1) {
        echo $_SESSION['message'];
        $_SESSION['warning'] = 0;
        }
}

?>