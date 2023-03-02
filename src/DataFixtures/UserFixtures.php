<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('karim');
        $user->setPassword('$2y$13$m6fVPSRXl6CX10VDBFX8iuB2/q3cg715O4YDFOGmnlYCX0cfJnPLu');

        $manager->persist($user);

        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('$2y$13$0DvF3NAcgGQf8cayFSVu7e2k59.JXsyuwyxYTEk0n2LtFSnJiU8ni');
        $user->setRoles(['ROLE_ADMIN']);

        $manager->persist($user);

        $manager->flush();
    }
}
