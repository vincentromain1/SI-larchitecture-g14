<?php
/**
 * Created by PhpStorm.
 * User: leolombard
 * Date: 16/05/2017
 * Time: 11:21
 */
require_once "Connect.php";

class Revues
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
                  numero, 
                  date, 
                  img, 
                  region, 
                  lien 
                 FROM 
                   revues 
                 WHERE
                 id = :id";
        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'id' => $id
        ]);

        return $requete->fetch(PDO::FETCH_ASSOC);

    }

    public function selectAll()
    {
        $sql = "SELECT 
                  id, 
                  numero, 
                  date, 
                  img, 
                  region, 
                  lien 
                 FROM 
                   revues";

        $requete = $this->bdd->prepare($sql);
        $requete->execute();

        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($param)
    {
        $sql = "INSERT INTO revues(
                numero, date, 
                img, region, lien
                ) 
                VALUES 
               (
               :numero, :date, :img, 
               :region, :lien
               )";

        $requete = $this->bdd->prepare($sql);

        $requete->execute(array(
            'numero' => $param['numero'],
            'date'    => $param['date'],
            'img'     => $param['img'],
            'region'  => $param['region'],
            'lien'   => $param['lien'],
        ));
    }

    public function update($param)
    {
        $sql = "UPDATE 
                  revues
                SET 
                  numero = :numero, 
                  date = :date, 
                  img = :img, 
                  region = :region, 
                  lien = :lien 
                WHERE
                 id = :id";

        $requete = $this->bdd->prepare($sql);

        $requete->execute(array(
            'id'      => $param['id'],
            'numero'  => $param['numero'],
            'date'    => $param['date'],
            'img'     => $param['img'],
            'region'  => $param['region'],
            'lien'    => $param['lien'],
        ));
    }

    public function delete($id)
    {
        $sql = "DELETE FROM revues WHERE id = :id";

        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
    }


}