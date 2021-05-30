<?php


namespace App\DataFixtures;


use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{

    public const PQRL2020 = 'porquerolles2021';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $project1 = new Project();
        $project1->setLabel("Porquerolles")
            ->setCode("PQRL2021")
            ->setStartedAt($faker->dateTime)
            ->setEndedAt(null)
            ->setDescription($faker->realText(200))
            ->addStudent($this->getReference(StudentFixtures::STD_DLEFLOUR))
            ->addStudent($this->getReference(StudentFixtures::STD_LGENEVOIS))
            ->addStudent($this->getReference(StudentFixtures::STD_CMAUGEZ))
            ->addSubject($this->getReference(SubjectFixtures::STMN1A))
            ->addSubject($this->getReference(SubjectFixtures::STMN21));

        $manager->persist($project1);

        $manager->flush();

        $this->addReference(self::PQRL2020, $project1);
    }

    public function getDependencies(): array
    {
        return [
            StudentFixtures::class,
            SubjectFixtures::class,
        ];
    }
}
