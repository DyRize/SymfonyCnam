<?php


namespace App\DataFixtures;

use App\Entity\Grade;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class GradeFixtures extends Fixture implements DependentFixtureInterface
{

    public const MATHS = 'mathematiques';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $mathsDLFlour = new Grade();
        $mathsDLFlour->setDate($faker->dateTime)
            ->setLabel("mathematiques pour l'informatique")
            ->setStudent($this->getReference(StudentFixtures::STD_DLEFLOUR))
            ->setSubject($this->getReference(SubjectFixtures::STMN01))
            ->setValue(15.0);

        $manager->persist($mathsDLFlour);

        $mathsCMaugez = new Grade();
        $mathsCMaugez->setDate($faker->dateTime)
            ->setLabel("mathematiques pour l'informatique")
            ->setStudent($this->getReference(StudentFixtures::STD_CMAUGEZ))
            ->setSubject($this->getReference(SubjectFixtures::STMN01))
            ->setValue(20.0);

        $manager->persist($mathsCMaugez);

        $mathsLGenevois = new Grade();
        $mathsLGenevois->setDate($faker->dateTime)
            ->setLabel("mathematiques pour l'informatique")
            ->setStudent($this->getReference(StudentFixtures::STD_LGENEVOIS))
            ->setSubject($this->getReference(SubjectFixtures::STMN01))
            ->setValue(8.0);

        $manager->persist($mathsLGenevois);

        $manager->flush();

    }

    public function getDependencies(): array
    {
        return [
            StudentFixtures::class,
            SubjectFixtures::class,
        ];
    }
}
