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
if(isset($_POST["bericht"])){
    $naamBericht[$_SESSION["username"]]  = $_POST["bericht"];
    $_SESSION["post"] = $naamBericht;
}

if(isset($_SESSION["username"])){
    echo '
    <form action="blog.php" method="post">
        <label for="bericht">Bericht</label><br>
        <textarea type="text" name="bericht" id="bericht" rows="5" cols="30"></textarea><br>
        <input name="submit" id="submit" type="submit" value="post">
    </form>';
}
if(isset($_SESSION["post"])){
    foreach($_SESSION["post"] as $naam => $bericht){
        echo $naam . "<br>". $bericht;
    }
}
?>
<main>

</main>


<?php include "pagebuilders/footer.html"; ?>

</body>
</html>