<?php
namespace Application\Controllers\Error;

class Error
{
    public function execute($error)
    {
        $errorMessage = $error;
        require('templates/404.php');

    }
}