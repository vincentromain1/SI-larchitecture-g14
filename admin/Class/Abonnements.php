<?php

require_once "Class/Connect.php";

class Abonnements
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Connect::getPdo();
    }

}