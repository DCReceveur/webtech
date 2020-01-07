<?php
session_start();

function generateBreadcrumb()
{
    $breadcrumb = "";
    $fullcrumb = "";
    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
    foreach(array_slice($crumbs,1) as $crumb){
        $fullcrumb .= $crumb."/";
        $crumb = str_replace('project_', '',$crumb);
        $crumb = str_replace('BP2_Webtech', 'Home',$crumb);
        $breadcrumb.= "<a href='/".$fullcrumb."'>" . ucfirst(str_replace(array('.php','_'),array('',' '),$crumb)) . "</a> &gt;";
    }
    $breadcrumb = trim($breadcrumb, '&gt;');
    $breadcrumb = trim($breadcrumb, '/');
    return $breadcrumb;
}

function generateName(){
    if(isset($_SESSION["username"])){
        return $_SESSION["username"];
    }else{
        return "Daan Receveur";
    }
}

function generateLogin()
{
    if (!isset($_SESSION["username"])) {
        $string = <<<LOGIN
<form method="POST" action="/bp2_webtech/pagebuilders/submit.php">
            <label for="username">Username</label>
            <input name="username" id="username" type="text" required><br>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" required><br>
            <input type="submit" name="submit" id="submit" value="login">
        </form>
LOGIN;

    } else {
        $string = <<<LOGOUT
<form method="POST" action="/bp2_webtech/pagebuilders/submit.php">
    <input name="submit" id="submit" type="submit" value="logout">
</form>    
LOGOUT;

    }
    echo $string;
}

function postBlogItem($title, $tekst){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WebtechBP2";
    $statement = <<<STATEMENT
    insert into blog values (4,'$title','$tekst',current_date)
STATEMENT;
    //TODO check how to get the 4 to increment

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($statement);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
