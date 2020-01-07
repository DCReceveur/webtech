<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.html';

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=WebtechBP2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<body>
<header>
    <?php
    include "pagebuilders/header.php";
    ?>
</header>
<main>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "WebtechBP2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;


    ?>
</main>
<?php include "pagebuilders/footer.html"; ?>

</body>
</html>