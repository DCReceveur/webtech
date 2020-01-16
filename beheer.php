<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.php';
include 'pagebuilders/maak_login_veld.php';
?>
<body>
<header>
    <?php
    include "pagebuilders/header.php";
    ?>
</header>
<main>
    <div>
        <?php

        if (isset($_SESSION["username"])) {
            echo '
            <h2>Blog item toevoegen</h2>
                <form action="pagebuilders/submit.php" method="post">
                    <label for="titel">titel</label><br>
                    <input type="text" name="titel" id="titel"><br>
                    <label for="bericht">Bericht</label><br>
                    <textarea type="text" name="bericht" id="bericht" rows="5" cols="30"></textarea><br>
                    <input name="submit" id="submit" type="submit" value="blogpost">
                </form>';
        }
        generateLogin();

        echo "</div>";

        if (isset($_SESSION["username"])) {
            echo getBerichten();
        }
        echo "</div>";
        ?>
</main>
<?php include "pagebuilders/footer.php"; ?>

</body>
</html>