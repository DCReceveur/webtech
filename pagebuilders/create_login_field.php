<?php
session_start();
function generateLogin()
{
    if (isset($_SESSION["username"])) {
        $string = <<<LOGIN
<form method="POST" action="submit.php">
            <label for="username">Username</label>
            <input name="username" id="username" type="text" required><br>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" required><br>
            <input type="submit" name="submit" value="login">
        </form>
LOGIN;

    } else {
        $string = <<<LOGOUT
<form method="POST" action="submit.php">
    <input name="submit" id="submit" type="button" value="logout">
LOGOUT;

    }
    echo $string;
}

?>