<?php
session_start();
require_once "Class/Connexion.class.php";

if(isset($_POST) && count($_POST) > 0)
{
    if(isset($_POST['bouton_connexion']) && isset($_POST['username']) && isset($_POST['password']))
    {
        $connexion = new Connexion($_POST['username'], $_POST['password']);

        if($connexion->session())
        {
            header("Location: Panel_admin.php");
            exit();
        }
    }
    else
    {
        echo"Erreur";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Connexion</title>
</head>
<body>
<header>
    <h1>Connexion</h1>
</header>
<main>
    <form action="Connexion.php" method="post">
    <table>
        <tr>
            <td>Pseudo</td>
            <td><input type="text" name="username" placeholder="Username" required></td>
        </tr>

        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="password" placeholder="Mot de passe" required></td>
        </tr>

        <tr>
            <td><input type="submit" name="bouton_connexion" value="se Connecter" ></td>
        </tr>
    </table>
    </form>
</main>

</body>
</html>
