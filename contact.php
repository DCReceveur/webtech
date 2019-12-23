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
        <h3>Contact opnemen? vul het formulier in!</h3>
        <form method="POST" action="submit.php">
            <label for="firstname">*Voornaam</label> <br>
            <input name="firstname" id="firstname" type="text" required><br>
            <label for="lastname">Achternaam</label><br>
            <input name="lastname" id="lastname" type="text"><br>
            <label for="email">*e-mail</label><br>
            <input name="email" id="email" type="text" required><br>
            <label for="message">*Bericht</label><br>
            <textarea id="message" name="message" required rows="5" cols="30"></textarea> <br>
            <input formaction="contact.html" type="submit" value="Submit">
        </form>
    </div>
    <div>
        <h3>je kan natuurlijk ook op de koffie komen!</h3>
        <img src="media/images/hoogeveldt_map.PNG" alt="een routebeschrijving naar hoogeveldt">
    </div>
</main>
<?php include "pagebuilders/footer.html"; ?>


</body>
</html>