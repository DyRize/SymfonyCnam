<?php


namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');


            $article1 = new Article();
            $article1->setTitle("Article 1")
                ->setAuthor($this->getReference(UserFixtures::YBACQUET))
                ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
                ->setType($this->getReference(ArticleTypeFixtures::INFO))
                ->setCreatedAt($faker->dateTime)
                ->setUpdatedAt($article1->getCreatedAt());

            $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle("Article 2")
            ->setAuthor($this->getReference(UserFixtures::OPAPINI))
            ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
            ->setType($this->getReference(ArticleTypeFixtures::ADMN))
            ->setCreatedAt($faker->dateTime)
            ->setUpdatedAt($article1->getCreatedAt());

        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle("Article 3")
            ->setAuthor($this->getReference(UserFixtures::DLEFLOUR))
            ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
            ->setType($this->getReference(ArticleTypeFixtures::BDE))
            ->setCreatedAt($faker->dateTime)
            ->setUpdatedAt($article1->getCreatedAt());

        $manager->persist($article3);

        $article4 = new Article();
        $article4->setTitle("Article 4")
            ->setAuthor($this->getReference(UserFixtures::CMAUGEZ))
            ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
            ->setType($this->getReference(ArticleTypeFixtures::EVENT))
            ->setCreatedAt($faker->dateTime)
            ->setUpdatedAt($article1->getCreatedAt());

        $manager->persist($article4);

        $article5 = new Article();
        $article5->setTitle("Article 5")
            ->setAuthor($this->getReference(UserFixtures::LGENEVOIS))
            ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
            ->setType($this->getReference(ArticleTypeFixtures::BDE))
            ->setCreatedAt($faker->dateTime)
            ->setUpdatedAt($article1->getCreatedAt());

        $manager->persist($article5);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            ArticleTypeFixtures::class,
        ];
    }
}
