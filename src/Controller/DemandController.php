<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandController extends AbstractController
{
    #[Route('/', name: 'chamados')]
    public function index(): Response
    {
        return $this->render('demand/index.html.twig', [
            'controller_name' => 'DemandController',
        ]);
    }

    #[Route('/novo', name: 'chamado')]
    public function newDemand(): Response
    {
        return $this->render('demand/demand.html.twig', [
            'controller_name' => 'DemandController',
        ]);
    }

    #[Route('/solicitacao/{id}', name: 'demanda')]
    public function demand($id)
    {
        return $this->render('demand/details.html.twig',[
            'title' => 'Solicitação'
        ]);
    }
}
