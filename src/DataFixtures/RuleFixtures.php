<?php

namespace App\DataFixtures;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Rule;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RuleFixtures extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $Rule = new Rule();

            $Rule->setName($this->faker->word());
            $Rule->setDescription($this->faker->sentence());
            $Rule->setAuthor($this->getReference("user_0"));

            $manager->persist($Rule);

            $this->setReference('rule_' . $i, $Rule);
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
