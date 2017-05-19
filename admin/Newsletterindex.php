<?php
/**
 * Created by PhpStorm.
 * User: tatianalizotte
 * Date: 17/05/2017
 * Time: 20:17
 */

require_once "Class/Newsletter.class.php";
$var = new Newsletter();
$letters =  $var->selectAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Newsletter</title>
</head>
<body>
<main>
    <h1>Bienvenue</h1>
    <h2>Newsletters</h2>

    <table>
        <tr>
            <td>Date</td>
            <td>Architecte</td>
            <td>Realisation</td>
            <td>Rubrique</td>
            <td>Lieu</td>
            <td>Departement</td>
        </tr>
        <?php foreach ($letters as $letter): ?>

            <tr>
                <td><?php echo $letter['date']; ?></td>
                <td><?php echo $letter['architecte']; ?></td>
                <td><?php echo $letter['realisation']; ?></td>
                <td><?php echo $letter['rubrique']; ?></td>
                <td><?php echo $letter['lieu']; ?></td>
                <td><?php echo $letter['departement']; ?></td>
                <td><a href="SupprimerNewsletter.php?id=<?= $letter['id']; ?>">Supprimer</a></td>
                <td><a href="EditerNewsletter.php?id=<?php echo $letter['id']; ?>">Modifier</a></td>
            </tr>

        <?php endforeach; ?>
        <pre><a href="AjouterNewsletter.php">Ajouter</a></td></pre>
    </table>



    <div><a href="Deconnexion.php">Deconnexion</a></div>
</main>
</body>
</html>
