<?php
namespace Application\Models\Admin;
use Application\Lib\DatabaseConnection\DatabaseConnection;

class AdminRepository
{
    public DatabaseConnection $connection;

    function getAdmin($email, $password)
    {

        $statement = $this->connection->getConnection()->prepare('SELECT * FROM admin WHERE email_admin = ? AND mot_pass_admin = ?');
        $affectedLines = $statement->execute([$email, $password]);

        if ($affectedLines > 0) {
            $data = $statement->fetch();
            return $data;
        } else {
            return false;
        }


    }
}