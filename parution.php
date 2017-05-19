<?php
require_once "admin/Class/Connect.php";
require_once "admin/Class/Revues.php";


$toto = new Revues();
$revues = $toto->selectAll();
?>

<?php include 'header.php';?>

<main>

    <h1 id="titre">NOS DERNIERES PARUTIONS</h1>
    <div>
        <form action="" id="barrerecherche">
        <input type="text" name="recherche" id="recherche"><input class="loupe" type="image" src="content/magnifier.svg" name="" value="" /></form></div>
    <div class="mainparution">
        <style type="text/css">
            .st0{fill:none;stroke:#000000;stroke-width:0.5022;stroke-miterlimit:10;}
            .st1{fill:none;stroke:#00B7CD;stroke-width:0.5022;stroke-miterlimit:10;}
            .st2{fill:none;}
            .st3{font-family:'Acronym-Light';}
            .st4{font-size:7.4615px;}
        </style>
        <?php foreach ($revues as $revue): ?>
        <div class="paru">
            <h3><a href="revue.php?id=<?= $revue['id'] ?>"><?= $revue['region']; ?></a></h3>
            <img src="content/<?= $revue['img']; ?>" alt=""><br>
            <svg id="svgb" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 106 39" style="enable-background:new 0 0 106 39;" xml:space="preserve" width="100%" height="19%">

                <rect x="4.5" y="8.9" class="st0" width="93.3" height="25.3"></rect>
                <rect x="7.6" y="4.3" class="st1" width="96.1" height="27.3"></rect>
                <rect x="14.7" y="14.1" class="st2" width="74.2" height="12.8"></rect>
                <text class="st3 st4" transform="matrix(1 0 0 1 24.433 20.698)"><a href="revue.php?id=<?= $revue['id'] ?>">Commande n° <?= $revue['numero']; ?></a></text>
                                                                                                                                                                                                                                                                                                 </svg>
        </div>
        <?php endforeach; ?>

    </div>

</main>
