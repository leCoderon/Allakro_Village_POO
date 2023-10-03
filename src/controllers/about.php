<?php
namespace Application\Controllers\About;


class About
{
    public function execute()
    {
        if (!isset($_SESSION['acteur']) && empty($_SESSION['acteur'])) {
            header('location: templates/login.php');
        }

        require('templates/about.php');
    }
}