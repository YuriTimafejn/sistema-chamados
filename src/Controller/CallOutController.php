<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CallOutController extends AbstractController
{
    #[Route('/chamados', name: 'chamados')]
    public function callOutList(): Response
    {
        return $this->render('call_out/index.html.twig', [
            'controller_name' => 'CallOutController',
        ]);
    }

    #[Route('/chamados/novo', name: 'chamado')]
    public function callOutList(): Response
    {
        return $this->render('call_out/call_out.html.twig', [
            'controller_name' => 'CallOutController',
        ]);
    }
}
