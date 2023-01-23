<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $program = new Program();
       $program->setTitle('Wu Tang Clan');
       $program->setSynopsis('Enter the 36 chambers with my the shaolin');
       $program->setCategory($this->getReference('category_Action'));
       $manager->persist($program);

        $manager->flush();
    }
}
