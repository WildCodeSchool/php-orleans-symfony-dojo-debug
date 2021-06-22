<?php

namespace App\DataFixtures;

use App\Entity\Pet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $poubelle = new Pet();
        $poubelle->setName('Poubelle')->setSpecies('cat');
        $manager->persist($poubelle);

        $lupita = new Pet();
        $lupita->setName('Lupita')->setSpecies('dog');
        $manager->persist($lupita);

        $felix = new Pet();
        $felix->setName('Felix')->setSpecies('cat');
        $manager->persist($felix);

        $poum = new Pet();
        $poum->setName('Poum')->setSpecies('cat');
        $manager->persist($poum);

        $manouche = new Pet();
        $manouche->setName('Manouche')->setSpecies('dog');
        $manager->persist($manouche);
    }
}
