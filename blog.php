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
<?php
if (isset($_POST["bericht"])) {
    $arrayitem = array(
        "datetime" => getdate(),
        "name" => $_SESSION["username"],
        "bericht" => $_POST["bericht"]
    );
    array_push($_SESSION["blog"],$arrayitem);
}

if (isset($_SESSION["username"])) {
    echo '
    <form action="blog.php" method="post">
        <label for="bericht">Bericht</label><br>
        <textarea type="text" name="bericht" id="bericht" rows="5" cols="30"></textarea><br>
        <input name="submit" id="submit" type="submit" value="blogpost">
    </form>';
}
if (isset($_SESSION["blog"])) {
    foreach ($_SESSION["blog"] as $naam => $bericht) {
        echo $naam . "<br>" . $bericht;
    }
}
?>
<main>

</main>


<?php include "pagebuilders/footer.html"; ?>

</body>
</html>