<?php
namespace Application\Controllers\Error;


class Error
{
    public function execute($error)
    {
        $errorMessage = $error;
        if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
            header('location: index.php?action=login');
        }

        require('templates/404.php');
    }
}