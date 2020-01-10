<?php
session_start();
require 'scripts.php';

if (isset($_POST)) {
    if ($_POST["submit"] == "login") {
//        echo password_hash('wachtwoord123', PASSWORD_DEFAULT);
        require 'login.php';
        if(login($_POST["username"], $_POST["password"]) == 1){
            $_SESSION["username"] = $_POST["username"];
//            echo 'login is a go';
        }
    } elseif ($_POST["submit"] == "logout") {
        session_destroy();
    } elseif($_POST["submit"] == "blogpost"){
        postBlogItem($_POST["titel"], $_POST["bericht"]);
      }
}

header("Location: ../beheer.php");
?>