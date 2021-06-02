<?php

namespace App\DataFixtures;

use App\Entity\Calendar;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CalendarFixtures extends Fixture
{
    function randomDate(\DateTime $start_date, \DateTime $end_date)
    {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d H:i:s', $val);
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($i = 0; $i < 15; $i++){
            $event = new Calendar();
            $heureDeb = $faker->unique(true)->numberBetween(7, 12);
            $heureFIn = $faker->unique(true)->numberBetween(12,19);
            $str_DateDeb = "";
            $str_DateFin = "";
			$allDay = false;
            if($i < 10){
                if($heureDeb < 10){
                    $str_DateDeb = "2021-06-0$i 0$heureDeb:00:00";
                }
                $str_DateDeb = "2021-06-0$i $heureDeb:00:00";
                $str_DateFin = "2021-06-0$i $heureFIn:00:00";
            }else{
                $str_DateDeb = "2021-06-$i $heureDeb:00:00";
                $str_DateFin = "2021-06-$i $heureFIn:00:00";
            }

			if($heureDeb == 7 && $heureFIn == 19){
				$allDay = true;
			}
            $event->setTitle("Evènement n°$i")
                ->setStart(new \DateTime($str_DateDeb))
                ->setEnd(new \DateTime($str_DateFin))
                ->setDescription("Description de l'évènement n°$i")
                ->setAllDay($allDay)
                ->setBackgroundColor("#0080c0")
                ->setBorderColor("#ff0000")
                ->setTextColor("#ffffff")
            ;
            $manager->persist($event);
        }
        $manager->flush();
    }
}
