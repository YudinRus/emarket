<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="", name="index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route(path="/", name="index_start_page")
     */
    public function startPage(): Response
    {
        $userId = rand(1, 100);

        $message = 'WELCOME user # ' . $userId;

        return $this->render('index.html.twig', [
           'message' =>  $message,
        ]);
    }
}