<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<?php
require 'pagebuilders/scripts.php';
include 'pagebuilders/head.php';
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
    $statement = "SELECT titel, tekst FROM blog ORDER BY datum desc";
    if(isset($_POST['zoeken'])){
        $statement ="SELECT titel, tekst FROM blog WHERE titel LIKE :zoekterm OR tekst LIKE :zoekterm ORDER BY datum desc";
        $stmt = $conn->prepare($statement);
        $stmt->execute([':zoekterm' => "%".$_POST['zoeken']."%"]);
    }else{
        $stmt = $conn->prepare($statement);
        $stmt->execute();
    }


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
$searchform = <<<SEARCHFORM
<form method="POST" action="krabbels.php">
            <label for="zoeken">zoeken:</label>
            <input name="zoeken" id="zoeken" type="text"><br> 
            <input type="submit" name="submit" value="zoeken"> </form>
SEARCHFORM;
echo $searchform;


    ?>
</main>
<?php include "pagebuilders/footer.php"; ?>

</body>
</html>