<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor_1 =  new Actor();
        $actor_1->setName('Christian Bale');
        $manager->persist($actor_1);

        $actor_2 =  new Actor();
        $actor_2->setName('Morgan Freeman');
        $manager->persist($actor_2);

        $actor_3 =  new Actor();
        $actor_3->setName('Liam Neeson');
        $manager->persist($actor_3);

        $actor_4 =  new Actor();
        $actor_4->setName('Heath Ledger');
        $manager->persist($actor_4);

        $actor_5 =  new Actor();
        $actor_5->setName('Tom Hardy');
        $manager->persist($actor_5);

        $actor_6 =  new Actor();
        $actor_6->setName('Anne Hathaway');
        $manager->persist($actor_6);

        $manager->flush();

        //To Reference On Pivot Table
        $this->addReference('actor_1', $actor_1);
        $this->addReference('actor_2', $actor_2);
        $this->addReference('actor_3', $actor_3);
        $this->addReference('actor_4', $actor_4);
        $this->addReference('actor_5', $actor_5);
        $this->addReference('actor_6', $actor_6);
    }
}
