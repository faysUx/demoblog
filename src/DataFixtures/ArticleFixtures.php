<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i =1; $i <= 10; $i++)
        {
       $article = new Article;
       $article->setTitle(" Titre d'article n°$i")
       ->setContent("<p>Contenu de l'article n°$i</p>")
       ->setImage("http://picsum.photos/250/150")
       ->setCreatedAt(new \dateTime);
       $manager->persist($article);
    }
        $manager->flush();
   
}
}
