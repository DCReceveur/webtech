<?php
session_start();

if (isset($_POST)) {
    if ($_POST["submit"] == "login") {
        $_SESSION["username"] = $_POST["username"];
    } elseif ($_POST["submit"] == "logout") {
        session_destroy();
    }
}

header("Location: ../blog.php");
?>