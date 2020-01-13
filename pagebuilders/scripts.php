<?php
session_start();


function generateBreadcrumb()
{
    $breadcrumb = "";
    $fullcrumb = "";
    $crumbs = explode("/", $_SERVER["REQUEST_URI"]);
    foreach (array_slice($crumbs, 1) as $crumb) {
        $fullcrumb .= $crumb . "/";
        $crumb = str_replace('project_', '', $crumb);
        $crumb = str_replace('BP2_Webtech', 'Home', $crumb);
        $breadcrumb .= "<a href='/" . $fullcrumb . "'>" . ucfirst(str_replace(array('.php', '_'), array('', ' '), $crumb)) . "</a> &gt;";
    }
    $breadcrumb = trim($breadcrumb, '&gt;');
    $breadcrumb = trim($breadcrumb, '/');
    return $breadcrumb;
}

function generateName()
{
    if (isset($_SESSION["username"])) {
        return "Administrator";
    } else {
        return "Daan Receveur";
    }
}

function postBlogItem($title, $tekst)
{
    require_once 'database.php';
    $conn = getConnection();

    $statement = "insert into blog (titel, tekst) VALUES (:title, :text)";


    $stmt = $conn->prepare($statement);
    $stmt->execute([':title' => $title, ':text' => $tekst]);
}

function getProjects()
{
    require_once 'database.php';
    $conn = getConnection();

    $stmt = $conn->prepare("select * from projecten");
    $stmt->execute();

    return $stmt->fetchAll();
}
