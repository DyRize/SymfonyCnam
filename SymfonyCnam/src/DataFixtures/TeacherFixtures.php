<?php


namespace App\DataFixtures;

use App\Entity\Teacher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class TeacherFixtures extends Fixture implements DependentFixtureInterface
{

    public const YBACQUET = 'tchr_ybacquet';
    public const OPAPINI = 'tchr_opapini';
    public const JMROBERT = 'tchr_jmrobert';
    public const RMARXER = 'tchr_rmarxer';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $teacher1 = new Teacher();
        $teacher1->setRelatedUser($this->getReference(UserFixtures::YBACQUET))
            ->addSubject($this->getReference(SubjectFixtures::STMN1A));

        $manager->persist($teacher1);

        $teacher2 = new Teacher();
        $teacher2->setRelatedUser($this->getReference(UserFixtures::OPAPINI))
            ->addSubject($this->getReference(SubjectFixtures::STMN18));

        $manager->persist($teacher2);

        $teacher3 = new Teacher();
        $teacher3->setRelatedUser($this->getReference(UserFixtures::JMROBERT))
            ->addSubject($this->getReference(SubjectFixtures::STMN10))
            ->addSubject($this->getReference(SubjectFixtures::STMN03));

        $manager->persist($teacher3);

        $teacher4 = new Teacher();
        $teacher4->setRelatedUser($this->getReference(UserFixtures::RMARXER))
            ->addSubject($this->getReference(SubjectFixtures::STMN10));

        $manager->persist($teacher4);

        $manager->flush();

        $this->addReference(self::YBACQUET, $teacher1);
        $this->addReference(self::OPAPINI, $teacher2);
        $this->addReference(self::JMROBERT, $teacher3);
        $this->addReference(self::RMARXER, $teacher4);

    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            SubjectFixtures::class,
        ];
    }
}
