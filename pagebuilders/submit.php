<?php
session_start();
require 'scripts.php';

if (isset($_POST)) {
    if ($_POST["submit"] == "login") {
        $_SESSION["username"] = $_POST["username"];
    } elseif ($_POST["submit"] == "logout") {
        session_destroy();
    } elseif($_POST["submit"] == "blogpost"){
        postBlogItem($_POST["titel"], $_POST["bericht"]);
      }
}

header("Location: ../beheer.php");
?>