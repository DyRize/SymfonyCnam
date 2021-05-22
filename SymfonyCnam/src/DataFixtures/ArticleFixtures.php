<?php


namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ArticleFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i = 0; $i < 5; $i++){
            $article = new Article();
            $article->setTitle("Article ".($i+1))
                ->setAuthor($manager->find('App\Entity\User',$i + 1))
                ->setContent($faker->realText($maxNbChars = 200, $indexSize = 2))
                ->setType($manager->find('App\Entity\ArticleType',($i % 4) + 1))
                ->setCreatedAt($faker->dateTime)
                ->setUpdatedAt($article->getCreatedAt());

            $manager->persist($article);
        }

        $manager->flush();
    }
}
