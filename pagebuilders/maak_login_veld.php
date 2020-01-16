<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
if (!isset($_SESSION)) {
    session_start();
}

function generateLogin()
{
    if (!isset($_SESSION["username"])) {
        $string = <<<LOGIN
<form method="POST" action="pagebuilders/submit.php">
            <label for="username">Username</label>
            <input name="username" id="username" type="text" required><br>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" required><br> 
            <input type="submit" name="submit" value="login"> 
        </form>

LOGIN;

    } else {
        $string = <<<LOGOUT
<form method="POST" action="pagebuilders/submit.php">
    <input name="submit" id="submit" type="submit" value="logout">
</form>
LOGOUT;

    }
    echo $string;
}

?>