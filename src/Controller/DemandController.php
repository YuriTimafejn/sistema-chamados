<?php

namespace App\Controller;

use App\Entity\Queue;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $queueRepository = $entityManager->getRepository(Queue::class);
        $queues = $queueRepository->findAll();
        return $this->render('demand/index.html.twig', [
            'controller_name' => 'DemandController',
            'queues' => $queues,
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
    public function demand($id): Response
    {
        return $this->render('demand/details.html.twig',[
            'title' => 'Solicitação',
            'id' => $id,
        ]);
    }

    #[Route('/solicitacao/{id}/historico', name: 'historico')]
    public function history($id): Response
    {
        return $this->render('demand/history.html.twig',[
            'title' => 'Histórico',
            'id' => $id,
        ]);
    }

    #[Route('/solicitacao/{id}/historico/{history}', name: 'atuado')]
    public function wasDone($id, $history): Response
    {
        return $this->render('demand/history_detail.html.twig',[
            'id' => $id,
        ]);
    }
}
