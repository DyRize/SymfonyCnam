<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dleflour = new User();
        $dleflour->setName('LE FLOUR')
            ->setFirstName('Dylan')
            ->setBirthDate(new DateTime('1999-10-25'))
            ->setMail('dylan.leflour25@gmail.com')
            ->setPhoneNumber('0786423929');

        $manager->persist($dleflour);

        $cmaugez = new User();
        $cmaugez->setName('MAUGEZ')
            ->setFirstName('Corentin')
            ->setBirthDate(new DateTime('1997-03-22'))
            ->setMail('corentin.mgz@gmail.com')
            ->setPhoneNumber('0626221481');

        $manager->persist($cmaugez);

        $lgenevois = new User();
        $lgenevois->setName('GENEVOIS')
            ->setFirstName('Ludovic')
            ->setBirthDate(new DateTime('1997-04-24'))
            ->setMail('ludovic.genevois@hotmail.fr')
            ->setPhoneNumber('0651190268');

        $manager->persist($lgenevois);

        $manager->flush();
    }
}
