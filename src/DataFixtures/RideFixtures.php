<?php

namespace App\DataFixtures;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ride;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class RideFixtures extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $Ride = new Ride();

            $Ride->setDeparture($this->faker->city());
            $Ride->setDestination($this->faker->city());
            $Ride->setSeats($this->faker->randomNumber());
            $Ride->setDate($this->faker->dateTimeBetween());
            $Ride->setPrice($this->faker->randomFloat());
            $Ride->setDriver($this->getReference("user_0"));
            $Ride->setCreated($this->faker->dateTimeThisMonth());
            $Ride->addRule($this->getReference("rule_0"));



            $manager->persist($Ride);

            $this->setReference('ride_' . $i, $Ride);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            UserFixtures::class,RuleFixtures::class
        ];
    }
}
