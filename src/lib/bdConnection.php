<?php
namespace Application\Lib\DatabaseConnection; 

class DatabaseConnection
{
    public ?\PDO $database = null;
    public function getConnection(): \PDO
    {
        if ($this->database == null) {
            //connexion a la base donnee
            $this->database = new \PDO("mysql:host=localhost; dbname=gestion_acteurs; charset=utf8", "root", "");

        }
        return $this->database;
    }
}



?>