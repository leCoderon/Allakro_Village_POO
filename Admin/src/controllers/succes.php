<?php
namespace Application\Controllers\Success;
class Success
{
    public function execute()
    {

        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        $location = $_GET['destination'];
        require('templates/succes.php');
    }
}