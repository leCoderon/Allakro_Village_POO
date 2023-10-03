<?php
namespace Application\Controllers\Logout;
class Logout
{
    public function execute()
    {
        $_SESSION[] = [];
        session_destroy();

        require('templates/login.php');
    }
}