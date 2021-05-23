<?php


namespace App\DataFixtures;

use App\Entity\ArticleType;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ArticleTypeFixtures extends Fixture
{
    public const INFO = 'informations';
    public const EVENT = 'evevement';
    public const BDE = 'bde';
    public const ADMN = 'administration';


    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $articleType1 = new ArticleType();
            $articleType1->setCode("INFO")
                ->setLabel("INFORMATION");

            $manager->persist($articleType1);

        $articleType2 = new ArticleType();
        $articleType2->setCode("EVENT")
            ->setLabel("EVENEMENT");

        $manager->persist($articleType2);

        $articleType3 = new ArticleType();
        $articleType3->setCode("BDE")
            ->setLabel("BDE");

        $manager->persist($articleType3);

        $articleType4 = new ArticleType();
        $articleType4->setCode("ADMN")
            ->setLabel("ADMINISTRATION");

        $manager->persist($articleType4);

        $manager->flush();

        $this->addReference(self::INFO, $articleType1);
        $this->addReference(self::EVENT, $articleType2);
        $this->addReference(self::BDE, $articleType3);
        $this->addReference(self::ADMN, $articleType4);
    }
}
