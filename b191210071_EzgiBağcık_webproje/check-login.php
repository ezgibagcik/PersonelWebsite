<?php
session_start();
ob_start();

$_SESSION["login"] = "false";
$_SESSION["count"] = 0;

if (($_POST["email"] == "ezgi.bagcik@ogr.sakarya.edu.tr") and ($_POST["password"] == "b191210071")) {

    //eğer bilgiler doğruysa login ismi verdiğimiz session kaydını yapıyoruz.ve session kaydını kullanıcı adıyla şifremize eşitliyoruz.

    $_SESSION["login"] = "true";
    $_SESSION["user"] = $_POST["email"];
    $_SESSION["pass"] = $_POST["password"];
    $_SESSION["count"] = 1;
    header("Location:index.php");
} else {
    header("Location:login.php");
    
}

ob_end_flush();
