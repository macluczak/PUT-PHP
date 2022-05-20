<?php session_start(); ?>
<?php 
 echo "</br>";  
 if (isset($_POST["zaloguj"]) & !empty($_POST["login"]) & !empty($_POST["haslo"])) {
     require("funkcje.php");
     echo "</br>";  

     $login = test_input($_POST["login"]);
     $haslo = test_input($_POST["haslo"]);

     if($login == $osoba1 -> login){
         $_SESSION["zalogowanyImie"] = $osoba1 -> imieNazwisko;
         $_SESSION["zalogowany"] = 1;
         echo ($osoba1 -> imieNazwisko);
         header("Location: user.php");
     }
     else{
        header("Location: indeks.php");
    }
 } else{
    header("Location: indeks.php");
}
 ?>
