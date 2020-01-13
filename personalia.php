<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.html';
?>
<body>
<header>
    <?php
    include "pagebuilders/header.php";
    ?>
</header>
<main>
    <div>
        <div class="fotospersonalia">

            <a href="personalia/boze_daan.php"> <img alt="een foto van een boze Daan"
                                                     src="media/images/pictures_200px/boze_daan_200px.jpg"></a>
            <a href="personalia/afgeleide_daan.php"> <img alt="een foto van een mobiel kijkende Daan"
                                                          src="media/images/pictures_200px/afgeleide_daan_200px.jpg"></a>
            <a href="personalia/afstand_daan.php"> <img alt="een foto van een in de verte kijkende Daan"
                                                        src="media/images/pictures_200px/afstand_daan_200px.jpg"></a>
            <a href="personalia/stage_daan.php"> <img alt="een foto van Daan in Budapest"
                                                      src="media/images/pictures_200px/stage_daan_200px.jpg"></a>
        </div>
        <h2>Algemeen</h2>
        <p class="textfield">Ik woon in Nijmegen, ben ongeveer hoog bejaard en houd niet van over mezelf vertellen.</p>

        <h2>Werk-ervaring</h2>
        <ul>
            <li><span class="bulletpoint_title">XPO</span><br>
                van december 2015 tot augustus 2016 als FTP medewerker
            </li>
            <li><span class="bulletpoint_title">Van Heek medical</span><br>
                van augustus 2015 tot december 2016 als orderpicker
            </li>
            <li><span class="bulletpoint_title">Norbert Dentressangle</span><br>
                van 2012 tot 2013 als Orderpicker
            </li>
        </ul>
        <h2>Stage-ervaring</h2>
        <ul>
            <li><span class="bulletpoint_title">TATA Consultancy Services</span><br>
                van Februari 2019 tot Juli 2019 als 1e lijns agent
            </li>
            <li><span class="bulletpoint_title">DCCN</span><br>
                van augustus 2017 tot Februari 2018 als 1e lijns agent en software engineer
            </li>
            <li><span class="bulletpoint_title">Frontier Computer Corp</span><br>
                van September 2015 tot Januari 2016 als algemeen medewerker
            </li>
        </ul>
        <h2>Opleidingen</h2>
        <ul>
            <li><a href="https://www.han.nl/"> Hogeschool Arnhem Nijmegen</a> (2019 - Heden)</li>
            <li><a href="https://www.roc-nijmegen.nl/"> ROC Nijmegen</a> (2016 - 2019)</li>
            <li><a href="https://www.leijgraaf.nl/"> ROC De Leijgraaf</a> (2013 - 2015)</li>
            <li><a href="https://www.jorismavo.nl/"> Jorismavo</a> (2007 - 2012)</li>
        </ul>
        <h2>Hobbies</h2>
        <ul>
            <li>Zwemmen</li>
            <li>Gitaar spelen</li>
            <li>Nieuwe dingen leren</li>
        </ul>
    </div>
</main>
<?php include "pagebuilders/footer.html"; ?>
</body>
</html>