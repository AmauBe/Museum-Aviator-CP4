<?php

namespace App\DataFixtures;

use App\Entity\Informations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InformationFixtures extends Fixture 
{
const INFORMATIONS = [
[
'model'=> 'Airbus A380-800',
'length' => '73 m', 
'height' => '24,1 m',  
'capacity_passenger' => '525',
'distance_capacity' => '15200 km',
'picture_cockpit' => 'https://live.staticflickr.com/1038/1485277663_9a244e64ec_b.jpg',
'pictures' => 'https://media.lesechos.com/api/v1/images/view/5c659fca8fe56f78a8351385/1280x720/060694702705-web-tete.jpg'
],

[
'model'=> 'Boeing 747',
'length' => '70,70 m', 
'height' => '19,10 m', 
'capacity_passenger' => '432 à 477',
'distance_capacity' => '13 000 km',
'picture_cockpit' => 'https://aircharterservice-globalcontent-live.cphostaccess.com/images/aircraft-guide-images/group/boeing-747-400-large_tcm36-3689.jpg',
'pictures' => 'https://www.popsci.com/uploads/2019/09/19/OU6P6FRDBJAURZMQYHXYZOV7OA.jpg?auto=webp',
],

[
'model'=> 'Bombardier CRJ 1000',
'length' => '23,60 m ', 
'height' => '7,50 m ',
'capacity_passenger' => '525',
'distance_capacity' => '15200 km',
'picture_cockpit' => 'https://www.aerospace-technology.com/wp-content/uploads/sites/15/2017/10/3-crj1000.jpg',
'pictures' => 'https://aircharterservice-globalcontent-live.cphostaccess.com/images/aircraft-guide-images/group/bombardier-crj-1000-large_tcm36-3710.jpg',
],
[
'model'=> 'Antonov An-225 Mriya',
'length' => '84 m', 
'height' => '18.1 m',  
'capacity_passenger' => 'ND',
'distance_capacity' => '2 500 km ',
'picture_cockpit' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/UR-82060%2C_Antonov_An-225_of_Antonov_Airlines_at_Manchester_Airport%2C_2013.jpg',
'pictures' => 'https://pbs.twimg.com/media/FMoBFw0XsAcf9bu.jpg',
],

[
'model'=> 'Le Rafale',
'length' => '15.27 m', 
'height' => '5.34 m', 
'capacity_passenger' => '1',
'distance_capacity' => '1 759 km',
'picture_cockpit' => 'http://rafalefan.e-monsite.com/medias/images/f-15e-cockpit-1.jpg',
'pictures' => 'https://static.latribune.fr/1738585/rafale-grece-dassault-aviation.jpg'
]
];
public function load(ObjectManager $manager): void
{ 
foreach (self::INFOPLANES as $key => $infoPlane){
$newInfoPlanes = new InfoPlanes();
$newInfoPlanes->setName($info['model']);
$newInfoPlanes->setLength($info['length']);
$newInfoPlanes->setHeight($info['height']);
$newInfoPlanes->setCapacityPassenger($info['capacity_passenger']);
$newInfoPlanes->setDistanceCapacity($info['distance_capacity']);
$newInfoPlanes->setPictureCockpit($info['picture_cockpit']);
$newInfoPlanes->setPictures($info['pictures']);
$manager->persist($newInfoPlanes);
$this->addReference('plane_' . $key, $newInfoPlanes);
}
$manager->flush();
}

}
