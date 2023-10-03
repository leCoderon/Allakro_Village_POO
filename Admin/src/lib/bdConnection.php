<?php
namespace Application\Lib\DatabaseConnection;

class databaseConnection
{
    public ?\PDO $connection = null;
    public function getConnection(): \PDO
    {
        if($this->connection === null){
            $this->connection = new \PDO("mysql:host=localhost; dbname=gestion_acteurs; charset=utf8", "root", "");
        }
        return $this->connection;
    }
}



?>