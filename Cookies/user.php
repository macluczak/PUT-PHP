<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <h1>Nasz system</h1>
    <a href="http://localhost/Lab5/indeks.php">Home</a>

    <?php

    echo "</br>";
    if ($_SESSION["zalogowany"] == 1) {
        echo "</br>";
        echo $_SESSION["zalogowanyImie"];
    } else {
        header("Location: indeks.php");
    } ?>
    </br>
    <form action="indeks.php" method="post">
        <input type="submit" value="wyloguj" name="wyloguj">
    </form>

    <form action="user.php" method="post" enctype="multipart/form-data">
        <input name="myfile" type="file">
        <input type="submit" value="wstaw" name="wstaw">
    </form>

    <?php
    $currentDir = getcwd();
    $uploadDir = "/image/";

        if(isset($_POST["wstaw"])){
    
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileType = $_FILES['myfile']['type'];
        if (
            $fileName != "" 
            and
            ($fileType == 'image/png' or $fileType == 'image/jpeg'
                or $fileType == 'image/png' or $fileType == 'image/jpeg')
        ) {
            $uploadPath = $currentDir . $uploadDir . $fileName;
            if (move_uploaded_file($fileTmpName, $uploadPath))
                echo "Zdjęcie zostało załadowane na serwer!";
        }
    }
    if(file_exists($currentDir . $uploadDir . "sample.jpg")){
        echo "<img src='image/sample.jpg' alt='dog'>";

    }else{
        echo "</br>";
        echo"brak zdjęcia do wyświetlenia";
    }
    
    


    ?>



</body>



</html>