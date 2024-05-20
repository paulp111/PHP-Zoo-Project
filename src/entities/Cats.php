<?php

require_once "Animal.php";

abstract class Cat extends Creature {
    private int $dangerLevel;

    public function __construct(
        string $name, 
        float $weight, 
        float $maxWeight, 
        float $minWeight, 
        bool $isFemale, 
        float $foodPortion, 
        int $dangerLevel
    ) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion);
        $this->dangerLevel = $dangerLevel;
    }

    public function getDangerLevel(): int {
        return $this->dangerLevel;
    }

    abstract public function makeSound(): void;
}
?>
