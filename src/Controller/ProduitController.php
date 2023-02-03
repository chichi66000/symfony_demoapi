<?php

namespace App\Controller;

use App\Service\ProduitService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route("/produits")]
class ProduitController extends AbstractController {
        // injection dépendance du ProduitService dans le controller
    public function __construct(private ProduitService $service) {}

    /**
     * Route retournent tous les produits
     *
     * @return JsonResponse
     */
    #[Route("/", name:"get.produits", methods: ["GET"])]
    public function getAll() : JsonResponse 
    {
        return $this->json($this->service->getAll());
    }
}