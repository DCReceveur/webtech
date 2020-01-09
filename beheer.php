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
    <?php

    if (isset($_SESSION["username"])) {
        echo '
                <form action="pagebuilders/submit.php" method="post">
                    <label for="titel">titel</label><br>
                    <input type="text" name="titel" id="titel"><br>
                    <label for="bericht">Bericht</label><br>
                    <textarea type="text" name="bericht" id="bericht" rows="5" cols="30"></textarea><br>
                    <input name="submit" id="submit" type="submit" value="blogpost">
                </form>';
    }

    echo "</div>";
    ?>
</main>
<?php include "pagebuilders/footer.html"; ?>

</body>
</html>