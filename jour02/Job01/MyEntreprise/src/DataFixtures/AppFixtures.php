<?php

namespace App\DataFixtures;
use App\Entity\Projets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i < 11 ; $i++) { 
        	$result = new Projets();
        	$result->setTitle('Articles n°'.$i);
        	$result->setContent('Un paragraphe random');
        	$result->setImage('http://placehold.it/350x150');
        	$result->setCreatedAt(new \DateTime());

        	$manager->persist($result);
        }

        $manager->flush();
    }


}
