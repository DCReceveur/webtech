<?php
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

function generateHead(){
    $head = <<<HEAD
<!DOCTYPE html>
<html lang="nl">
<head>
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daan Receveur</title>
</head>
HEAD;
return $head;
}
