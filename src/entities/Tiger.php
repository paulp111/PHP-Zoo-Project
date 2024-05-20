<?php

require_once "Cats.php";

class Tiger extends Cat {
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
        echo "Tiger says: Roar!";
    }

    public function interact(): void {
        echo "Tiger " . $this->getName() . " is purring";
    }
}
?>
