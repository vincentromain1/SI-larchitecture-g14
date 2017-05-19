<?php

require_once "Class/Newsletter.class.php";
$newsletter = new Newsletter();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $newsletter->update($_POST);
    header("Location: Panel_admin.php");
    exit();
}

$news = $newsletter->select($_GET['id']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/admin.css">
    <title>L'Architecture</title>
</head>
<body>


<!-- CONTENU -->

<div class="clearfix"></div><br/>

<div class="container">


    <form action="" method='post'>
        <table class='table table-bordered'>

        <input type="hidden" name="id" value="<?= $news['id'] ?>">

            <tr>
                <td>Date</td>
                <td><input type='date' name='date' class='form-control' value="<?= $news['date'] ?>" required></td>
            </tr>

            <tr>
                <td>Architecte</td>
                <td><input type='text' name='architecte' class='form-control'  value="<?= $news['architecte']?>" required></td>
            </tr>

            <tr>


            <tr>
                <td>Realisation</td>
                <td><input type='text' name='realisation' class='form-control' value="<?= $news['realisation']?>" required></td>
            </tr>

            <tr>
                <td>Rubrique</td>
                <td><input type='text' name='rubrique' class='form-control'  value="<?=$news['rubrique'] ?>" required></td>
            </tr>
            <tr>
                <td>Lieu</td>
                <td><input type='text' name='lieu' class='form-control' value="<?=$news['lieu'] ?>" required></td>
            </tr>
            <tr>
                <td>Departement</td>
                <td><input type='number' name='departement' class='form-control' value="<?=$news['departement'] ?>" required></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>
                    <a href="Panel_admin.php" class="btn btn-large btn-success"> &nbsp; Back to index</a>
                </td>
            </tr>

        </table>
    </form>


</div>

</body>
</html>

