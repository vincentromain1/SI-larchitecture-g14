<?php

/**
 * Created by PhpStorm.
 * User: leolombard
 * Date: 15/05/2017
 * Time: 16:34
 */
class Connect
{
    private static $pdo = null;

    /**
     * @return \PDO $pdo
     */
    public static function getPdo()
    {
        if(is_null(self::$pdo)){
            try{
                self::$pdo = new \PDO('mysql:host=localhost;dbname=Architecture','root', 'root');
                self::$pdo->exec("SET NAMES UTF8;");
            } catch(Exception $exception) {
                die('Oops, I did it again.');
            }
        }
        return self::$pdo;
    }
}
