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
            //todo alt in de database zetten.

        }
        ?>

<!--        <article>-->
<!--            <img alt="de album cover van savage sinusoid" src="media/images/projects/spaghetti_forever.jpg">-->
<!--            <h2>Spaghetti forever</h2>-->
<!--            <p>Het leren van de intro van spaghetti forever is een lopend project waar ik niet heel goed mee bezig-->
<!--                ben.</p>-->
<!--            <a href="projecten/project_spaghetti.php">lees meer</a>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="een foto van een sierpinski triangle" src="media/images/projects/sierpinski_triangle.jpg">-->
<!--            <h2>Sierpinski triangle</h2>-->
<!--            <p>Ik heb voor de lol in processing met zo weinig mogelijk Google gebruik een sierpinski triangle zitten-->
<!--                maken om te trainen met recursive functies.</p>-->
<!---->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="een foto van het centipede speelveld" src="media/images/projects/centipede.jpg">-->
<!--            <h2>Centipede</h2>-->
<!--            <p>Korte omschrijving:</p>-->
<!--            <p>Centipede was een project wat ik moest maken voor het vak SPD.</p>-->
<!--            <a href="projecten/project_centipede.php">lees meer</a>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="het donders logo" src="media/images/projects/donders_logo.jpg">-->
<!--            <h2>SONA link</h2>-->
<!--            <p>Korte omschrijving:</p>-->
<!--            <p>Ik moest voor het Donders instituut een programma schrijven wat participanten van experimenten uit de-->
<!--                SONA database haalde.</p>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="het tata consultancy logo" src="media/images/projects/tcs_logo.jpg">-->
<!--            <h2>Stage in Hongarije</h2>-->
<!--            <h4>Korte omschrijving:</h4>-->
<!--            <p>Ik heb een half jaar stage gelopen bij TATA Consultancy Services als 1e lijns agent voor EY.</p>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="het windows server 2016 logo" src="media/images/projects/windows_server.jpg"/>-->
<!--            <h2>Windows server opzetten</h2>-->
<!--            <h4>Korte omschrijving:</h4>-->
<!--            <p>Op het MBO heb ik een goed aantal keren via Windows server een DHCP, DNS en fileserver moeten-->
<!--                opzetten.</p>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="het logo van de HAN" src="media/images/projects/han_logo.jpg">-->
<!--            <h2>HBO</h2>-->
<!--            <p>Mijn volgende grote project is het afmaken van een HBO opleiding. Ik heb lang gedacht dat ik zou ophouden-->
<!--                na MBO maar ben er toch maar voor gegaan.</p>-->
<!--        </article>-->
<!---->
<!--        <article>-->
<!--            <img alt="de groepsfoto van gang 35 vlak voor het gangfeest" src="media/images/projects/gangfeest.jpg">-->
<!--            <h2>Gangfeest</h2>-->
<!--            <p>We hebben recent met de gang een gangfeest georganiseerd. Dit was redelijk wat geplan maar erg-->
<!--                gezellig.</p>-->
<!--        </article>-->
<!---->
    </div>
</main>
<?php include "pagebuilders/footer.html"; ?>


</body>
</html>