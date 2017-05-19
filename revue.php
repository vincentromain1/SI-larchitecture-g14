<?php
require_once "admin/Class/Connect.php";
require_once "admin/Class/Revues.php";

$toto = new Revues();
$revue = $toto->select($_GET['id']);

//var_dump($revues);
//die();

?>
<?php include 'header.php';?>


<main>

        <?php include 'header.php';?>

        <body class="wrap">
        <div class="title">
            <h1><?= $revue['region']; ?></h1>
            <h2><?= $revue['numero']; ?></h2>
        </div>

        <div class="mainarticle">
        <div class="article  col-5">
            <img class="magazine" src="content/<?= $revue['img']; ?>" alt="magazine277"> <br>
            <a href="tarifs-commande.php">Commander</a>
        </div>
        <div class="partenaire clearfix col-6">
            <h2>Nos partenaires</h2>
            <p>Agencement, mobilier, métier d'art, décoration, cheminées</p>
            <ul>
                <li>Euresco (69)</li>
                <li>Leroux - Pacreau (49)</li>
            </ul>
            <p>Agencement, mobilier, métier d'art, décoration, cheminées</p>
            <ul>
                <li>Euresco (69)</li>
                <li>Leroux - Pacreau (49)</li>
            </ul>
            <p>Agencement, mobilier, métier d'art, décoration, cheminées</p>
            <ul>
                <li>Euresco (69)</li>
                <li>Leroux - Pacreau (49)</li>
            </ul>
            <p>Agencement, mobilier, métier d'art, décoration, cheminées</p>
            <ul>
                <li>Euresco (69)</li>
                <li>Leroux - Pacreau (49)</li>
            </ul>
        </div>
        </div>
        </body>
    </main>
