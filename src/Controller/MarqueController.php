<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Repository\MarqueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MarqueController extends AbstractController
{
    #[Route('/marque', name: 'marque_index', methods: ['GET'])]
    public function index(MarqueRepository $repo): Response
    {
       
        return $this->render('marque/index.html.twig', [
            'controller_name' => 'MarqueController',
            'marques' =>$repo->findAll()
        ]);
    }

    #[Route('/marque/{id}', name: 'marque_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show( Marque $marque): Response {
        
        return $this->render('marque/show.html.twig', [
            'marque' => $marque,
        ]);
    }
    #[Route('/marque/create', name: 'marque_create', priority: 10, methods: ['GET', 'POST'])]
    public function create(): Response {
        dd(__METHOD__);
    }
    #[Route('/marque/{id}/edit', name: 'marque_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(): Response {
        dd(__METHOD__);
    }
    #[Route('/marque/{id}/delete', name: 'marque_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response {
        dd(__METHOD__);
    }


}
