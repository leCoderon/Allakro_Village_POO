<?php
namespace Application\Controllers\Logout;
class Logout
{
    public function execute()
    {
        $_SESSION[] = [];
        session_destroy();

        header('location: index.php');
    }
}