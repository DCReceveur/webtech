<!DOCTYPE html>
<html lang="nl">
<head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn projecten</title>
</head>
<body>
<header>
    <h1 class="pagina_titel"><a href="index.html"> <img src="media/images/hyves_logo.png"
                                                        alt="Het hyves logo met de hoofden vervangen door Daan's hoofd"></a>Daan
        Receveur Hyves</h1>
    <nav class="navbar">
        <div>
            <a class="navbar_item" href="index.html">Home</a>
        </div>
        <div>
            <a class="navbar_item" href="personalia.html">Personalia</a>
        </div>
        <!--        drop down menu start-->
        <div class="dropdown">
            <a class="navbar_item" href="projecten.html">Projecten</a>
            <div class="dropdown-content">
                <a href="project_centipede.html">Centipede</a>
                <a href="project_spaghetti.html">Spaghetti forever</a>
            </div>
        </div>
        <!--        drop down menu end-->
        <div>
            <a class="navbar_item" href="contact.html">contact</a>
        </div>
    </nav>
    <div class="breadcrumb">
        Je bent hier: <a href="index.html">Home</a> &gt;
        <a href="contact.html">Contact</a>
    </div>
</header>
<main>
    <div>
        <h3>Contact opnemen? vul het formulier in!</h3>
        <form>
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
<footer>
    &copy; - 2019 - Daan Receveur - 642199 - ITN 1C
</footer>

</body>
</html>