<?php
require_once __DIR__ . "/entities/Base.php";
require_once __DIR__ . "/entities/Tiger.php";
require_once __DIR__ . "/entities/Lion.php";
require_once __DIR__ . "/entities/Rhino.php";
require_once __DIR__ . "/zoo/Zoo.php";

$zooInstance = new Zoo();

$shirkanTiger = new Tiger("Shirkan", 0, 220, 180, false, 10, 4);
$soraTiger = new Tiger("Sora", 0, 140, 120, true, 7, 2);

$mufasaLion = new Lion("Mufasa", 0, 250, 150, false, 12, 3);
$namibiLion = new Lion("Namibi", 0, 180, 110, true, 8, 5);

$henrikRhino = new Rhino("Henrik", 0, 2500, 1800, false, 120);
$amiliaRhino = new Rhino("Amilia", 0, 2000, 1700, true, 100);

$zooInstance->addAnimal($shirkanTiger);
$zooInstance->addAnimal($soraTiger);
$zooInstance->addAnimal($mufasaLion);
$zooInstance->addAnimal($namibiLion);
$zooInstance->addAnimal($henrikRhino);
$zooInstance->addAnimal($amiliaRhino);

foreach ($zooInstance->getAllAnimals() as $animal) {
    while ($animal->getCurrentWeight() < $animal->getMinWeight()) {
        $animal->eat();
    }
}
?>