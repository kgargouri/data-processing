<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $file = fopen('D:\Projets\Jeux+de+données\Clients.csv','r');
        
        $i=1;
        while(! feof($file))
        {
            $row = fgetcsv($file, null, ";");
            $client=new Client();
            if($row){
                $client->setClient($row['1']);
                $client->setAdresse($row[2]);
                $client->setCodePostal($row[3]);
                $client->setVille($row[4]);
                $client->setTelephone($row[5]);
                $client->setCivilite($row[6]);
                $client->setPrenom($row[7]);
                $client->setNom($row[8]);
            }

            $this->addReference('client-'.$i, $client);

            $manager->persist($client);
            $i++;
        }
        fclose($file);
        
        $manager->flush();
    }
}
