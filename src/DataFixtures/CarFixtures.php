<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Car;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CarFixtures extends AbstractFixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void

    {
        for ($i = 0; $i < 10; $i++) {
            $Car = new Car();

            $Car->setBrand($this->faker->word());
            $Car->setModel($this->faker->word());
            $Car->setSeats($this->faker->randomNumber());
            $Car->setOwner($this->getReference("user_0"));
            $Car->setCreated($this->faker->dateTime());

            $manager->persist($Car);

            $this->setReference('car_' . $i, $Car);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
						UserFixtures::class,
				];
    }
} 



