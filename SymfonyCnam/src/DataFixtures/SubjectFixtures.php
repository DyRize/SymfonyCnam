<?php


namespace App\DataFixtures;

use App\Entity\Subject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SubjectFixtures extends Fixture
{

    public const STMN01 = 'maths';
    public const STMN02 = 'architectureSysteme';
    public const STMN03 = 'algorithmique';
    public const STMN04 = 'physique';
    public const STMN05 = 'rapportR1';
    public const STMN06 = 'communication1';
    public const STMN08 = 'gestionDeProjet';
    public const STMN09 = 'traitementSignal';
    public const STMN0A = 'systemeExploitation';
    public const STMN0C = 'technologieTransmedia';
    public const STMN0D = 'IHM';
    public const STMN0E = 'rapportR2';
    public const STMN1B = 'progOutilTransmedia';
    public const STMN0B = 'reseaux';
    public const STMN10 = 'syntheseImageSon';
    public const STMN11 = 'baseDeDonnees';
    public const STMN12 = 'progOrienteeObjet';
    public const STMN13 = 'projetPluri1';
    public const STMN14 = 'communication2';
    public const STMN15 = 'rapportR3';
    public const STMN18 = 'progMobile';
    public const STMN19 = 'programmationWeb';
    public const STMN1A = 'systemeInteraction';
    public const STMN1C = 'rapportR4';
    public const STMN1D = 'sejourInternational';
    public const STMN21 = 'genieLogiciel';



    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $subject1 = new Subject();
        $subject1->setLabel("Mathématiques pour l'informatique")
            ->setCode("STMN01");

        $manager->persist($subject1);

        $subject2 = new Subject();
        $subject2->setLabel("Architecture des systèmes informatiques")
            ->setCode("STMN02");

        $manager->persist($subject2);

        $subject3 = new Subject();
        $subject3->setLabel("Algorithmique et programmation")
            ->setCode("STMN03");

        $manager->persist($subject3);

        $subject4 = new Subject();
        $subject4->setLabel("Base de la physique pour le transmédia")
            ->setCode("STMN04");

        $manager->persist($subject4);

        $subject5 = new Subject();
        $subject5->setLabel("Rapport R1")
            ->setCode("STMN05");

        $manager->persist($subject5);

        $subject6 = new Subject();
        $subject6->setLabel("Communication Expression")
            ->setCode("STMN06");

        $manager->persist($subject6);

        $subject7 = new Subject();
        $subject7->setLabel("Gestion des projets des médias numériques")
            ->setCode("STMN08");

        $manager->persist($subject7);

        $subject8 = new Subject();
        $subject8->setLabel("Traitement du signal")
            ->setCode("STMN09");

        $manager->persist($subject8);

        $subject9 = new Subject();
        $subject9->setLabel("Principes des systèmes d'exploitation")
            ->setCode("STMN0A");

        $manager->persist($subject9);

        $subject10 = new Subject();
        $subject10->setLabel("Technologies transmédia")
            ->setCode("STMN0C");

        $manager->persist($subject10);

        $subject11 = new Subject();
        $subject11->setLabel("Interface Homme - Machine")
            ->setCode("STMN0D");

        $manager->persist($subject11);

        $subject12 = new Subject();
        $subject12->setLabel("Rapport R2")
            ->setCode("STMN0E");

        $manager->persist($subject12);

        $subject13 = new Subject();
        $subject13->setLabel("Programmation et outils de développement d'application transmédia")
            ->setCode("STMN1B");

        $manager->persist($subject13);

        $subject14 = new Subject();
        $subject14->setLabel("Réseaux")
            ->setCode("STMN0B");

        $manager->persist($subject14);

        $subject15 = new Subject();
        $subject15->setLabel("Synthèse et analyse des images et du son")
            ->setCode("STMN10");

        $manager->persist($subject15);

        $subject16 = new Subject();
        $subject16->setLabel("Base de données")
            ->setCode("STMN11");

        $manager->persist($subject16);

        $subject17 = new Subject();
        $subject17->setLabel("Conception et développement 1 : programmation orientée objet")
            ->setCode("STMN12");

        $manager->persist($subject17);

        $subject18 = new Subject();
        $subject18->setLabel("Projets pluridisciplinaires 1")
            ->setCode("STMN13");

        $manager->persist($subject18);

        $subject19 = new Subject();
        $subject19->setLabel("Communication expression S3")
            ->setCode("STMN14");

        $manager->persist($subject19);

        $subject20 = new Subject();
        $subject20->setLabel("Rapport R3")
            ->setCode("STMN15");

        $manager->persist($subject20);

        $subject21 = new Subject();
        $subject21->setLabel("Conception et développement 2 : programmation mobile")
            ->setCode("STMN18");

        $manager->persist($subject21);

        $subject22 = new Subject();
        $subject22->setLabel("Programmation Web")
            ->setCode("STMN19");

        $manager->persist($subject22);

        $subject23 = new Subject();
        $subject23->setLabel("Systèmes d'interaction")
            ->setCode("STMN1A");

        $manager->persist($subject23);

        $subject24 = new Subject();
        $subject24->setLabel("Rapport R4")
            ->setCode("STMN1C");

        $manager->persist($subject24);

        $subject25 = new Subject();
        $subject25->setLabel("Sejour international")
            ->setCode("STMN1D");

        $manager->persist($subject25);

        $subject26 = new Subject();
        $subject26->setLabel("Génie Logiciel")
            ->setCode("STMN21");

        $manager->persist($subject26);

        $manager->flush();

        $this->addReference(self::STMN01, $subject1);
        $this->addReference(self::STMN02, $subject2);
        $this->addReference(self::STMN03, $subject3);
        $this->addReference(self::STMN04, $subject4);
        $this->addReference(self::STMN05, $subject5);
        $this->addReference(self::STMN06, $subject6);
        $this->addReference(self::STMN08, $subject7);
        $this->addReference(self::STMN09, $subject8);
        $this->addReference(self::STMN0A, $subject9);
        $this->addReference(self::STMN0C, $subject10);
        $this->addReference(self::STMN0D, $subject11);
        $this->addReference(self::STMN0E, $subject12);
        $this->addReference(self::STMN1B, $subject13);
        $this->addReference(self::STMN0B, $subject14);
        $this->addReference(self::STMN10, $subject15);
        $this->addReference(self::STMN11, $subject16);
        $this->addReference(self::STMN12, $subject17);
        $this->addReference(self::STMN13, $subject18);
        $this->addReference(self::STMN14, $subject19);
        $this->addReference(self::STMN15, $subject20);
        $this->addReference(self::STMN18, $subject21);
        $this->addReference(self::STMN19, $subject22);
        $this->addReference(self::STMN1A, $subject23);
        $this->addReference(self::STMN1C, $subject24);
        $this->addReference(self::STMN1D, $subject25);
        $this->addReference(self::STMN21, $subject26);
    }
}
