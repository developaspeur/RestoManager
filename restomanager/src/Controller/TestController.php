<?php 
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}


