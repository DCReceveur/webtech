<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
session_start();


function maakBreadcrumb()
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

function getBerichten()
{
    require_once 'database.php';
    $conn = getConnection();

    $stmt = $conn->prepare("select * from berichten order by datum desc");
    $stmt->execute();
    $result = $stmt->fetchAll();

    $print = "<div> <h2>Berichten</h2>";
    foreach ($result as $row) {
        $print .= <<<PRINT

            <table>
                <tr>
                    <th>Naam:</th>
                    <th>$row[naam]</th>
                </tr>
                <tr>
                    <th>telefoon:</th>
                    <th>$row[telefoon]</th>
                </tr>
                <tr>
                    <th>e-mail:</th>
                    <th>$row[email]</th>
                </tr>
                <tr>
                    <th>datum:</th>
                    <th>$row[datum]</th>
                </tr>
                <tr>
                    <th>project:</th>
                    <th>$row[project]</th>
                </tr>
                <tr>
                    <th>bericht:</th>
                    <th>$row[bericht]</th>
                </tr>
                </table>
                <br>
            
PRINT;
    }
    return $print;
}
