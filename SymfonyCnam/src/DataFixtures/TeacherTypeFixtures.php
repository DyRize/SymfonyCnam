<?php


namespace App\DataFixtures;

use App\Entity\TeacherType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class TeacherTypeFixtures extends Fixture implements DependentFixtureInterface
{

    public const INTERV = 'intervenant';
    public const RESPO = 'responsablePromo';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $teacherType1 = new TeacherType();
        $teacherType1->setLabel("INTERVENANT")
        ->setCode("INTERV");

        $manager->persist($teacherType1);

        $teacherType2 = new TeacherType();
        $teacherType2->setLabel("RESPONSABLE")
            ->setCode("RESPO");

        $manager->persist($teacherType2);

        $manager->flush();

        $this->addReference(self::INTERV, $teacherType1);
        $this->addReference(self::RESPO, $teacherType2);
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
