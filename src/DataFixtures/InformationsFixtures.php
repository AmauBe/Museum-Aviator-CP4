<?php

namespace App\DataFixtures;

use App\Entity\Informations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class InformationFixtures extends Fixture implements DependentFixtureInterface
{
    const INFORMATIONS = [
        [
         'Name'=> 'Airbus A380-800',
         'Length' => '73 m', 
         'Height' => '24,1 m', 
         'Speed max' => '1030km/h', 
         'Passenger Capacity' => '525',
         'Distance Capacity' => '15200 km',
         'Fuel Capacity' => '310000 l',
         'Cockpit Image' => 'https://live.staticflickr.com/1038/1485277663_9a244e64ec_b.jpg',
         'Present Image' => 'https://media.lesechos.com/api/v1/images/view/5c659fca8fe56f78a8351385/1280x720/060694702705-web-tete.jpg'
    ],

         [
         'Name'=> 'Boeing 747',
         'Length' => '70,70 m', 
         'Height' => '19,10 m', 
         'Speed max' => '1000km/h', 
         'Passenger Capacity' => '432 à 477',
         'Distance Capacity' => '13 000 km',
         'Fuel Capacity' => '215 000 litres',
         'Cockpit Image' => 'https://aircharterservice-globalcontent-live.cphostaccess.com/images/aircraft-guide-images/group/boeing-747-400-large_tcm36-3689.jpg',
         'Present Image' => 'https://www.popsci.com/uploads/2019/09/19/OU6P6FRDBJAURZMQYHXYZOV7OA.jpg?auto=webp',
],

         [
         'Name'=> 'Bombardier CRJ 1000',
         'Length' => '23,60 m ', 
         'Height' => '7,50 m  ',
         'Speed max' => '830km/h',  
         'Passenger Capacity' => '525',
         'Distance Capacity' => '15200 km',
         'Fuel Capacity' => '310000 l',
         'Cockpit Image' => 'https://www.aerospace-technology.com/wp-content/uploads/sites/15/2017/10/3-crj1000.jpg',
         'Present Image' => 'https://aircharterservice-globalcontent-live.cphostaccess.com/images/aircraft-guide-images/group/bombardier-crj-1000-large_tcm36-3710.jpg',
],
         [
         'Name'=> 'Antonov An-225 Mriya',
         'Length' => '84 m', 
         'Height' => '18.1 m', 
         'Speed max' => '850km/h',  
         'Passenger Capacity' => 'ND',
         'Distance Capacity' => '2 500 km ',
         'Fuel Capacity' => 'ND',
         'Cockpit Image' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/UR-82060%2C_Antonov_An-225_of_Antonov_Airlines_at_Manchester_Airport%2C_2013.jpg',
         'Present Image' => 'https://pbs.twimg.com/media/FMoBFw0XsAcf9bu.jpg',
],

         [
         'Name'=> 'Le Rafale',
         'Length' => '15.27 m', 
         'Height' => '5.34 m', 
         'Speed max' => '1 912 km/h ',  
         'Passenger Capacity' => '1',
         'Distance Capacity' => '1 759 km',
         'Fuel Capacity' => '11 000 l',
         'Cockpit Image' => 'http://rafalefan.e-monsite.com/medias/images/f-15e-cockpit-1.jpg',
         'Present Image' => 'https://static.latribune.fr/1738585/rafale-grece-dassault-aviation.jpg'
         ]
         ];
       
        public function load(ObjectManager $manager): void
        { 
        foreach (self::INFORMATIONS as $key => $info){
        $informations = new plane();
        $informations->setName($info['Name']);
        $informations->setLength($info['Length']);
        $informations->setHeight($info['Height']);
        $informations->setSpeedMax($info['SpeedMax']);
        $informations->setPassengerCapacity($info['PassengerCapacity']);
        $informations->setDistanceCapacity($info['DistanceCapacity']);
        $informations->setFuelCapacity($info['FuelCapacity']);
        $informations->setCockpitImage($info['CockpitImage']);
        $informations->setPresentImage($info['PresentImage']);
        $informations->setModel($this->getReference('plane_' . $info['Plane']));
        $manager->persist($informations);
        $this->addReference('plane_' . $key, $informations);
        }
        $manager->flush();
        }
        public function getDependencies()
        
        {
        return [ 
        CategoryFixtures::class,];
        }
        }