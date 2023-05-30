<?php

namespace App\DataFixtures;

use App\Entity\AnimalSex;
use App\Entity\User;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends AbstractFixture
{
   


    public function load(ObjectManager $manager): void
    {
        $adminUser = new User();
        $adminUser->setEmail('admin@magle.fr');
        $adminUser->setFirstName($this->faker->firstname());
        $adminUser->setLastName($this->faker->lastname());
       
        $dateString = $this->faker->date();
        $createdDate = new \DateTime($dateString);
        $adminUser->setCreated($createdDate);
        
        $PhoneNumber = $this->faker->PhoneNumber();
        $adminUser->setPhone(intval($PhoneNumber));

        $adminUser->setRoles([]);
       
        $adminUser->setPassword($this->passwordHasher->hashPassword($adminUser, '12345678'));

        $manager->persist($adminUser);

        $this->setReference ( 'user_' . 0, $adminUser);

        for ($i = 1; $i < 6; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email());
            $user->setRoles([]);
            $user->setFirstName($this->faker->firstname());
            $user->setLastName($this->faker->lastname());
            $dateString = $this->faker->date();
            $createdDate = new \DateTime($dateString);
            $user->setCreated($createdDate);
            
            $PhoneNumber = $this->faker->PhoneNumber();
            $user->setPhone(intval($PhoneNumber));
          
            $user->setPassword($this->passwordHasher->hashPassword($user, '12345678'));

            $manager->persist($user);

            $this->setReference('user_' . $i, $user);
        }

        $manager->flush();
    }
}