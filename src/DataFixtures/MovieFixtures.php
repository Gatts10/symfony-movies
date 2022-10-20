<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie_1 = new Movie();
        $movie_1->setTitle("Batman Begins");
        $movie_1->setReleaseYear(2005);
        $movie_1->setDescription('This is the first movie of the trilogy.');
        $movie_1->setImagePath('https://m.media-amazon.com/images/I/71bGh-RiDRL.jpg');

        //Add Data To Pivot Table
        $movie_1->addActor($this->getReference('actor_1'));
        $movie_1->addActor($this->getReference('actor_2'));
        $movie_1->addActor($this->getReference('actor_3'));
        $manager->persist($movie_1);

        $movie_2 = new Movie();
        $movie_2->setTitle("The Dark Knight");
        $movie_2->setReleaseYear(2008);
        $movie_2->setDescription('This is the second movie of the trilogy.');
        $movie_2->setImagePath('https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg');

        //Add Data To Pivot Table
        $movie_2->addActor($this->getReference('actor_1'));
        $movie_2->addActor($this->getReference('actor_2'));
        $movie_2->addActor($this->getReference('actor_4'));
        $manager->persist($movie_2);

        $movie_3 = new Movie();
        $movie_3->setTitle("The Dark Knight Rises");
        $movie_3->setReleaseYear(2012);
        $movie_3->setDescription('This is the third movie of the trilogy.');
        $movie_3->setImagePath('https://m.media-amazon.com/images/M/MV5BMTk4ODQzNDY3Ml5BMl5BanBnXkFtZTcwODA0NTM4Nw@@._V1_FMjpg_UX1000_.jpg');

        //Add Data To Pivot Table
        $movie_3->addActor($this->getReference('actor_1'));
        $movie_3->addActor($this->getReference('actor_2'));
        $movie_3->addActor($this->getReference('actor_5'));
        $movie_3->addActor($this->getReference('actor_6'));
        $manager->persist($movie_3);

        $manager->flush();
    }
}
