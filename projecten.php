<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.html';
?>
<body>
<header>
    <?php
    include "pagebuilders/header.php";
    ?>
    <link href="/bp2_webtech/css/projecten.css" rel="stylesheet" type="text/css">
</header>

<main>
    <div class="projecten">
        <?php
        $result = getProjects();
        foreach ($result as $project){
            echo <<<PROJECT
                <article>
                    <img src="$project[afbeelding]" alt="$project[alt]">
                    <h2>$project[naam]</h2>
                    <p>$project[tekst]</p>
                </article>
PROJECT;
        }
        ?>
    </div>
</main>
<?php include "pagebuilders/footer.html"; ?>


</body>
</html>