<?php session_start(); ?>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
      <a href = "http://localhost/Lab6/form06_post.php">Dodaj Pracownika</a>
</br>
</br>
     </body>
</html>

<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
}
$result->free();
$link->close();
