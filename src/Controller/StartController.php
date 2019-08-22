<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class StartController extends AbstractController
{
    /**
     * @Route(/{category})
     */
    public function show($category)
    {
        return $this -> render();
    }
}