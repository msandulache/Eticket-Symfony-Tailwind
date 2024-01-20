<?php

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class GenreFixture extends Fixture {

    private $faker;

    public function __construct() {

        $this->faker = Factory::create();
    }

    public function load(ObjectManager $manager) {

        for ($i = 0; $i < 50; $i++) {
            $manager->persist($this->getGenre());
        }
        $manager->flush();
    }

    private function getGenre() {

        $genre = new Genre();
        $genre->setTmdbId($this->faker->randomNumber(5, true));
        $genre->setName($this->faker->name());

        return $genre;
    }
}
