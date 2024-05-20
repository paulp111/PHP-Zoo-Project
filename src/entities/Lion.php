<?php
require_once "Cats.php";

class Lion extends Cat {
    public function __construct(
        string $name, 
        float $weight, 
        float $maxWeight, 
        float $minWeight, 
        bool $isFemale, 
        float $foodPortion, 
        int $dangerLevel
    ) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion, $dangerLevel);
    }

    public function makeSound(): void {
        echo "Lion says: Rooooaaaaar!";
    }

    public function interact(): void {
        echo "Lion " . $this->getName() . " is purring";
    }
}
?>
