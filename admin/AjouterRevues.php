<?php

require_once "Class/Revues.php";

    $revues = new Revues();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $revues->insert($_POST);
  }
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

                <tr>
                    <td>Numero</td>
                    <td><input type='text' name='numero' class='form-control' required></td>
                </tr>

                <tr>
                    <td>Date</td>
                    <td><input type='text' name='date' class='form-control' required></td>
                </tr>

                <tr>


                <tr>
                    <td>Img</td>
                    <td><input type='file' name='img' class='form-control' required></td>
                </tr>

                <tr>
                    <td>Région</td>
                    <td><input type='text' name='region' class='form-control' required></td>
                </tr>
                <tr>
                    <td>Lien</td>
                    <td><input type='text' name='lien' class='form-control' required></td>
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
