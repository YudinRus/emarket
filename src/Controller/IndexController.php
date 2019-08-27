<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="")
 */
class IndexController extends AbstractController
{
    /**
     * @Route(path="/", name="start_page")
     */
    public function startPage(): Response
    {
        return $this->render('index.html.twig');
    }
}