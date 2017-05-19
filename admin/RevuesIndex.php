<?php
/**
 * Created by PhpStorm.
 * User: tatianalizotte
 * Date: 17/05/2017
 * Time: 17:33
 */
require_once "Class/Revues.php";


$yollo = new Revues();
$magazines = $yollo->selectAll();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Panel_admin</title>
</head>
<body>
<main>
    <h1>Bienvenue</h1>
    <h2>Magazines</h2>

    <table>
        <tr>
            <td>ID</td>
            <td>Numero</td>
            <td>Date</td>
            <td>Region</td>
            <td>Lien</td>
            <td>Image</td>
        </tr>
            <?php foreach ($magazines as $magazine): ?>

    <tr>
        <td><?php echo $magazine['id']; ?></td>
        <td><?php echo $magazine['numero']; ?></td>
        <td><?php echo $magazine['date']; ?></td>
        <td><?php echo $magazine['region']; ?></td>
        <td><?php echo $magazine['img']; ?></td>
        <td><?php echo $magazine['lien']; ?></td>
        <td><a href="SupprimerRevues.php?id=<?= $magazine['id']; ?>">Supprimer</a></td>
        <td><a href="EditerRevues.php?id=<?php echo $magazine['id']; ?>">Modifier</a></td>
    </tr>

<?php endforeach; ?>
<pre><a href="AjouterRevues.php">Ajouter</a></td></pre>
</table>



<div><a href="Deconnexion.php">Deconnexion</a></div>
</main>
</body>
</html>
