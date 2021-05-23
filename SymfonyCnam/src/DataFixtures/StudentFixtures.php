<?php


namespace App\DataFixtures;

use App\Entity\Student;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class StudentFixtures extends Fixture implements DependentFixtureInterface
{

    public const STD_DLEFLOUR = 'std_dleflour';
    public const STD_CMAUGEZ = 'std_cmaugez';
    public const STD_LGENEVOIS = 'std_lgenevois';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $student1 = new Student();
        $student1->setArrivedAt($faker->dateTime)
            ->setGraduatedAt(null)
            ->setPromotion($this->getReference(PromotionFixtures::PROMO2019))
            ->setRelatedUser($this->getReference(UserFixtures::DLEFLOUR))
            ->addSubject($this->getReference(SubjectFixtures::STMN01))
            ->addSubject($this->getReference(SubjectFixtures::STMN18))
            ->addSubject($this->getReference(SubjectFixtures::STMN0B))
            ->addSubject($this->getReference(SubjectFixtures::STMN19))
            ->addSubject($this->getReference(SubjectFixtures::STMN1A))
            ->addSubject($this->getReference(SubjectFixtures::STMN1C))
            ->addSubject($this->getReference(SubjectFixtures::STMN1D))
            ->addSubject($this->getReference(SubjectFixtures::STMN21));

        $manager->persist($student1);

        $student2 = new Student();
        $student2->setArrivedAt($faker->dateTime)
            ->setGraduatedAt(null)
            ->setPromotion($this->getReference(PromotionFixtures::PROMO2019))
            ->setRelatedUser($this->getReference(UserFixtures::LGENEVOIS))
            ->addSubject($this->getReference(SubjectFixtures::STMN01))
            ->addSubject($this->getReference(SubjectFixtures::STMN18))
            ->addSubject($this->getReference(SubjectFixtures::STMN0B))
            ->addSubject($this->getReference(SubjectFixtures::STMN19))
            ->addSubject($this->getReference(SubjectFixtures::STMN1A))
            ->addSubject($this->getReference(SubjectFixtures::STMN1C))
            ->addSubject($this->getReference(SubjectFixtures::STMN1D))
            ->addSubject($this->getReference(SubjectFixtures::STMN21));

        $manager->persist($student2);

        $student3 = new Student();
        $student3->setArrivedAt($faker->dateTime)
            ->setGraduatedAt(null)
            ->setPromotion($this->getReference(PromotionFixtures::PROMO2019))
            ->setRelatedUser($this->getReference(UserFixtures::CMAUGEZ))
            ->addSubject($this->getReference(SubjectFixtures::STMN01))
            ->addSubject($this->getReference(SubjectFixtures::STMN18))
            ->addSubject($this->getReference(SubjectFixtures::STMN0B))
            ->addSubject($this->getReference(SubjectFixtures::STMN19))
            ->addSubject($this->getReference(SubjectFixtures::STMN1A))
            ->addSubject($this->getReference(SubjectFixtures::STMN1C))
            ->addSubject($this->getReference(SubjectFixtures::STMN1D))
            ->addSubject($this->getReference(SubjectFixtures::STMN21));

        $manager->persist($student3);

        $manager->flush();

        $this->addReference(self::STD_DLEFLOUR, $student1);
        $this->addReference(self::STD_LGENEVOIS, $student2);
        $this->addReference(self::STD_CMAUGEZ, $student3);

    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            SubjectFixtures::class,
            PromotionFixtures::class,
        ];
    }
}
