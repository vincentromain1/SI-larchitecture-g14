<?php
session_start();


require_once "Class/Connect.php";
//require_once "Class/Magazine.php";

if(!isset($_SESSION['username']))
{
    header("Location: Connexion.php");
    exit();

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>
<div>
    <?php
    echo 'Bienvenue : '.$_SESSION['username']. ' <a href="deconnexion.php">Déconnexion</a>';
    ?>
    <pre>
        <a href="RevuesIndex.php">Revues</a>
        <a href="Newsletterindex.php">Newsletter</a>
        <a href="Class/Commandes.php">Commandes</a>
    </pre>
    <a href=""></a>
    <a href=""></a>
</div>
</body>
</html>