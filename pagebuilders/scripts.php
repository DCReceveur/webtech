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

//function generateHead(){
//    $head = <<<HEAD
//<!DOCTYPE html>
//<html lang="nl">
//<head>
//    <link href="../../css/styles.css" rel="stylesheet" type="text/css">
//    <meta charset="UTF-8">
//    <meta name="viewport" content="width=device-width, initial-scale=1.0">
//    <title>Daan Receveur</title>
//</head>
//HEAD;
//return $head;
//}
