<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr-FR');
        for ($i = 0; $i <10; $i++) {
            $produit = new Produit();
            $produit->setNom($faker->sentence(1));
            $produit->setDescription($faker->sentence(15));
            $produit->setPrix($faker->randomFloat(2, 1, 100));
            $manager->persist($produit);
        }

        $manager->flush();
    }
}
