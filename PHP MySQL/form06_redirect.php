<?php session_start(); ?>
<?php
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
    header("Location: form06_post.php");
}

if (
    isset($_POST['id_prac']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko'])
) {
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        printf("Query failed: %s\n", mysqli_error($link));
        $_SESSION["warning"]= 1;
        $_SESSION["message"]= "Wprowadzono błędne dane!";
        header("Location: form06_post.php");
    }
    else{
        $_SESSION["warning"]= 0;
        header("Location: form06_get.php");
        }

    $stmt->close();
    
}
else{
    $_SESSION["warning"]= 1;
    $_SESSION["message"]= "Wypełnij poprawnie dane!";
    header("Location: form06_post.php");
}
$result->free();
$link->close();
