<?php
namespace App\Service;

use App\Repository\ProduitRepository;

class ProduitService {
    
    // injection dépendance du ProduitReository
    public function __construct (private ProduitRepository $repository) 
    {}

    // récupérer les data depuis la méthode findAll() du repository
    public function getAll () : array 
    {
        return $this->repository->findAll();
    }
}