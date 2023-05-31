<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class firstClass
{

    #[Route("/")]
    public function myCat()
    {

        die("abc dgh lod dfkjr");
    }

    

    #[Route("/browser/{page}")]
    public function page(string $page): Response
    {
        $page = strtoupper($page);
        return $this->render('fileName.html.twig',[
            
        ]);
        // return new Response("Hello we are in " . $page);
    }
}
