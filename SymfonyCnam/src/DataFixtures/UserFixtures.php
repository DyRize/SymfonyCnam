<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $ybacquet = new User();
        $ybacquet->setFirstName('Yannick')
            ->setLastName('BACQUET')
            ->setEmail('yannick.bacquet@univ-tln.fr')
            ->setPassword($this->passwordEncoder->encodePassword($ybacquet, 'yannickbacquet'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($ybacquet->getCreatedAt())
            ->setRoles(['ROLE_ADMIN', 'ROLE_SPEAKER']);

        $manager->persist($ybacquet);


        $opapini = new User();
        $opapini->setFirstName('Olivia')
            ->setLastName('PAPINI')
            ->setEmail('olivia.papini@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($opapini, 'oliviapapini'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($opapini->getCreatedAt())
            ->setRoles(['ROLE_SPEAKER']);

        $manager->persist($opapini);

        $dleflour = new User();
        $dleflour->setFirstName('Dylan')
            ->setLastName('LE FLOUR')
            ->setEmail('dylan.leflour25@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($dleflour, 'dydouledoudou'))
            ->setBirthDate(new DateTime('1999-10-25'))
            ->setPhoneNumber('0786423929')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($dleflour->getCreatedAt())
            ->setRoles(['ROLE_DELEGATE', 'ROLE_BDE', 'ROLE_STUDENT']);

        $manager->persist($dleflour);

        $cmaugez = new User();
        $cmaugez->setFirstName('Corentin')
            ->setLastName('MAUGEZ')
            ->setEmail('corentin.mgz@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($cmaugez, 'cocolasticot'))
            ->setBirthDate(new DateTime('1997-03-22'))
            ->setPhoneNumber('0626221481')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($cmaugez->getCreatedAt())
            ->setRoles(['ROLE_BDE', 'ROLE_STUDENT']);

        $manager->persist($cmaugez);

        $lgenevois = new User();
        $lgenevois->setFirstName('Ludovic')
            ->setLastName('GENEVOIS')
            ->setEmail('ludovic.genevois@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword($lgenevois, 'louloulepoux'))
            ->setBirthDate(new DateTime('1997-04-24'))
            ->setPhoneNumber('0651190268')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($lgenevois->getCreatedAt())
            ->setRoles(['ROLE_BDE', 'ROLE_STUDENT']);

        $manager->persist($lgenevois);

        $manager->flush();

    }
}
