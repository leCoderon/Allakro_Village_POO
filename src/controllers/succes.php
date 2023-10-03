<?php
namespace Application\Controllers\Success;
class Success
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        require('templates/succes.php');

    }
}