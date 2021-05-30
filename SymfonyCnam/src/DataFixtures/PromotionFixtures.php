<?php


namespace App\DataFixtures;

use App\Entity\Promotion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PromotionFixtures extends Fixture implements DependentFixtureInterface
{

    public const PROMO2018 = 'promo2018';
    public const PROMO2019 = 'promo2019';
    public const PROMO2020 = 'promo2020';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $promo1 = new Promotion();
        $promo1->setStartedAt($faker->dateTime)
            ->setEndedAt(null)
            ->setLabel('2018-2021')
            ->setCode('prm_2018')
            ->setManager($this->getReference(TeacherFixtures::JMROBERT));

        $manager->persist($promo1);

        $promo2 = new Promotion();
        $promo2->setStartedAt($faker->dateTime)
            ->setEndedAt(null)
            ->setLabel('2019-2022')
            ->setCode('prm_2019')
            ->setManager($this->getReference(TeacherFixtures::RMARXER));

        $manager->persist($promo2);

        $promo3 = new Promotion();
        $promo3->setStartedAt($faker->dateTime)
            ->setEndedAt(null)
            ->setLabel('2020-2023')
            ->setCode('prm_2020')
            ->setManager($this->getReference(TeacherFixtures::OPAPINI));

        $manager->persist($promo3);

        $manager->flush();

        $this->addReference(self::PROMO2018, $promo1);
        $this->addReference(self::PROMO2019, $promo2);
        $this->addReference(self::PROMO2020, $promo3);

    }

    public function getDependencies(): array
    {
        return [
            TeacherFixtures::class,
        ];
    }
}
