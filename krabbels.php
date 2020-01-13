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
    $stmt = $conn->prepare("SELECT id, titel, tekst, datum FROM blog ORDER BY datum desc");
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
        echo "</div>";



    ?>
</main>
<?php include "pagebuilders/footer.html"; ?>

</body>
</html>