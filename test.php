<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.html';
require_once 'pagebuilders/database.php';

?>
<body>
<header>
    <?php
    include "pagebuilders/header.php";
    ?>
</header>
<main>
    <?php
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT id, titel, tekst, datum FROM blog");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<div class='blog'>";
    foreach ($stmt->fetchAll() as $record) {
        echo "<div>";
        echo "<h3>" . $record['titel'] . "</h3>";
        echo $record['tekst'];
        echo "</div><br>";
    }

//    if (isset($_SESSION["username"])) {
//        echo '
//                <form action="pagebuilders/submit.php" method="post">
//                    <label for="titel">titel</label><br>
//                    <input type="text" name="titel" id="titel"><br>
//                    <label for="bericht">Bericht</label><br>
//                    <textarea type="text" name="bericht" id="bericht" rows="5" cols="30"></textarea><br>
//                    <input name="submit" id="submit" type="submit" value="blogpost">
//                </form>';
//    }

    echo "</div>";


    ?>
</main>
<?php include "pagebuilders/footer.html"; ?>

</body>
</html>