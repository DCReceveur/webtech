<!-- Daan Receveur 642199 -->
<!-- 14-01-2020 -->
<div class="pagina_titel">
    <div>
        <h1><a href="../index.php"><img src="/BP2_Webtech/media/images/hyves_logo.png"
        alt="Het hyves logo met de hoofden vervangen door Daan's hoofd"></a>
            <?php
            echo generateName();
            ?> Hyves</h1>
    </div>
</div>
<nav class="navbar">
    <div>
        <a class="navbar_item" href="/BP2_Webtech/index.php">Home</a>
    </div>
    <div>
        <a class="navbar_item" href="/BP2_Webtech/personalia.php">Personalia</a>
    </div>
    <!--        drop down menu start-->
    <div class="dropdown">
        <a class="navbar_item" href="/BP2_Webtech/projecten.php">Projecten</a>
        <div class="dropdown-content">
            <a href="/BP2_Webtech/projecten/project_centipede.php">Centipede</a>
            <a href="/BP2_Webtech/projecten/project_spaghetti.php">Spaghetti forever</a>
        </div>
    </div>
    <!--        drop down menu end-->
    <div>
        <a class="navbar_item" href="/BP2_Webtech/contact.php">contact</a>
    </div>
    <div>
        <a class="navbar_item" href="/BP2_Webtech/krabbels.php">Krabbels</a>
    </div>
    <div>
        <a class="navbar_item" href="/BP2_Webtech/beheer.php">beheer</a>
    </div>
</nav>
<div class="breadcrumb">
    Je bent hier: <?php echo maakBreadcrumb(); ?>
</div>
