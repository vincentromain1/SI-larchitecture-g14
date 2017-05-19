<?php

/**
 * Created by PhpStorm.
 * User: leolombard
 * Date: 15/05/2017
 * Time: 16:34
 */
require_once "Class/Connect.php";

class Connexion
{
    private $username;
    private $password;
    private $bdd;




    public function __construct($username, $password)
    {

        $this->username = $username;
        $this->password = $password;
        $this->bdd = Connect::getPdo();
    }

    public function session()
    {
        $request = $this->bdd->prepare("SELECT id FROM table_user WHERE username = :username");
        $request->execute(array(
            'username'=>$this->username
        ));
        $request = $request->fetch();
        $_SESSION['id'] = $request['id'];
        $_SESSION['username'] = $this->username;

        return 1;

    }


//=====================getter et setter===================
    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

}