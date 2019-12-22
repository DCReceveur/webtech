<?php
session_start();
print_r($_POST);

$_SESSION["username"] = $_POST["username"];
echo $_SESSION["username"];
echo "<a href='contact.php'>hier</a>>";
?>