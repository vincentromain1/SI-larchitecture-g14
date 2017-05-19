<?php

/**
 * Created by PhpStorm.
 * User: leolombard
 * Date: 16/05/2017
 * Time: 17:19
 */
require_once "Connect.php";
class Newsletter
{
    private $bdd;
    // private $param;

    //Connexion à la bdd
    public function __construct()
    {
        $this->bdd = Connect::getPdo();
    }


    public function select($id)
    {
        $sql = "SELECT 
                  id,
                  date, 
                  architecte, 
                  realisation, 
                  rubrique, 
                  lieu, 
                  departement 
                 FROM 
                   newsletter 
                 WHERE
                 id = :id";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
        return $requete->fetch();
    }

    public function selectAll()
    {
        $sql = "SELECT 
                  id,
                  date, 
                  architecte, 
                  realisation, 
                  rubrique, 
                  lieu, 
                  departement
                 FROM 
                   newsletter";

        $requete = $this->bdd->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT INTO newsletter(
                  date, 
                  architecte, 
                  realisation, 
                  rubrique, 
                  lieu, 
                  departement
                ) 
                VALUES 
               (
               :date, :architecte, :realisation, :rubrique, 
               :lieu, :departement
               )";

        $requete = $this->bdd->prepare($sql);

        $requete->execute(array(
            'date'    => $param['date'],
            'architecte'     => $param['architecte'],
            'realisation' => $param['realisation'],
            'rubrique'    => $param['rubrique'],
            'lieu'   => $param['lieu'],
            'departement'   => $param['departement'],
        ));
    }

    public function update($param)
    {
        $sql = "UPDATE 
                  newsletter
                SET 
                 date = :date,
                  architecte = :architecte,  
                  realisation = :realisation, 
                  rubrique = :rubrique, 
                  lieu = :lieu, 
                  departement = :departement
                WHERE
                 id = :id";

        $requete = $this->bdd->prepare($sql);

        $requete->execute(array(
            'id' => $param['id'],
            'date' => $param['date'],
            'architecte' => $param['architecte'],
            'realisation'    => $param['realisation'],
            'rubrique'     => $param['rubrique'],
            'lieu'   => $param['lieu'],
            'departement'   => $param['departement'],

        ));
        if ($requete->errorCode()!='00000'){
        die($requete->errorInfo()[2]);
    }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM newsletter WHERE id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
    }

}

?>
