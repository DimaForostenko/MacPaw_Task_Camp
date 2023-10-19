<?php

namespace App\Controller;

use App\Entity\Collection;
use App\Repository\CollectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AllMeetController extends AbstractController
{

    public function __construct(private CollectionRepository $collectionRepository)
    {
        
    }

    #[Route('/allmeet', name: 'app_all_meet')]
    public function root(): Response
    {
         $meets = $this->collectionRepository->findAll();

         return $this->json($meets);
    }
    public function create (){}
}
