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
    public const YBACQUET = 'ybacquet';
    public const OPAPINI = 'opapini';
    public const JMROBERT = 'jmrobert';
    public const RMARXER = 'rmarxer';
    public const DLEFLOUR = 'dleflour';
    public const CMAUGEZ = 'cmaugez';
    public const LGENEVOIS = 'lgenevois';

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $ybacquet = new User();
        $ybacquet->setFirstName('Yannick')
            ->setLastName('Bacquet')
            ->setEmail('yannick.bacquet@univ-tln.fr')
            ->setPassword($this->passwordEncoder->encodePassword($ybacquet, 'ybacquet'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($ybacquet->getCreatedAt())
            ->setRoles(['ROLE_ADMIN']);

        $manager->persist($ybacquet);


        $opapini = new User();
        $opapini->setFirstName('Olivia')
            ->setLastName('Papini')
            ->setEmail('olivia.papini@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($opapini, 'opapini'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($opapini->getCreatedAt())
            ->setRoles(['ROLE_SPEAKER']);

        $manager->persist($opapini);

        $jmrobert = new User();
        $jmrobert->setFirstName('Jean-Marc')
            ->setLastName('Robert')
            ->setEmail('jean-marc.robert@lecnam.net')
            ->setPassword($this->passwordEncoder->encodePassword($jmrobert, 'jmrobert'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($jmrobert->getCreatedAt())
            ->setRoles(['ROLE_SPEAKER']);

        $manager->persist($jmrobert);

        $rmarxer = new User();
        $rmarxer->setFirstName('Ricard')
            ->setLastName('Marxer')
            ->setEmail('ricard.marxer@lecnam.net')
            ->setPassword($this->passwordEncoder->encodePassword($rmarxer, 'rmarxer'))
            ->setBirthDate($faker->dateTime)
            ->setPhoneNumber($faker->phoneNumber)
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($rmarxer->getCreatedAt())
            ->setRoles(['ROLE_SPEAKER']);

        $manager->persist($rmarxer);

        $dleflour = new User();
        $dleflour->setFirstName('Dylan')
            ->setLastName('Le Flour')
            ->setEmail('dylan.leflour25@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($dleflour, 'dleflour'))
            ->setBirthDate(new DateTime('1999-10-25'))
            ->setPhoneNumber('0786423929')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($dleflour->getCreatedAt())
            ->setRoles(['ROLE_DELEGATE', 'ROLE_BDE', 'ROLE_STUDENT']);

        $manager->persist($dleflour);

        $cmaugez = new User();
        $cmaugez->setFirstName('Corentin')
            ->setLastName('Maugez')
            ->setEmail('corentin.mgz@gmail.com')
            ->setPassword($this->passwordEncoder->encodePassword($cmaugez, 'cmaugez'))
            ->setBirthDate(new DateTime('1997-03-22'))
            ->setPhoneNumber('0626221481')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($cmaugez->getCreatedAt())
            ->setRoles(['ROLE_BDE', 'ROLE_STUDENT']);

        $manager->persist($cmaugez);

        $lgenevois = new User();
        $lgenevois->setFirstName('Ludovic')
            ->setLastName('Genevois')
            ->setEmail('ludovic.genevois@hotmail.fr')
            ->setPassword($this->passwordEncoder->encodePassword($lgenevois, 'lgenevois'))
            ->setBirthDate(new DateTime('1997-04-24'))
            ->setPhoneNumber('0651190268')
            ->setCreatedAt(new DateTime())
            ->setLastConnexionDate($lgenevois->getCreatedAt())
            ->setRoles(['ROLE_STUDENT']);

        $manager->persist($lgenevois);

        for ($i = 0; $i < 30; $i++) {
            $user = new User();
            $user->setFirstName($faker->firstName)
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPassword($this->passwordEncoder->encodePassword($user, $faker->password))
                ->setBirthDate($faker->dateTime())
                ->setPhoneNumber($faker->phoneNumber)
                ->setCreatedAt(new DateTime())
                ->setLastConnexionDate($user->getCreatedAt());

            $manager->persist($user);
        }

        $manager->flush();

        $this->addReference(self::YBACQUET, $ybacquet);
        $this->addReference(self::OPAPINI, $opapini);
        $this->addReference(self::JMROBERT, $jmrobert);
        $this->addReference(self::RMARXER, $rmarxer);
        $this->addReference(self::DLEFLOUR, $dleflour);
        $this->addReference(self::CMAUGEZ, $cmaugez);
        $this->addReference(self::LGENEVOIS, $lgenevois);

    }
}
