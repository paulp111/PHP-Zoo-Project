<?php
require_once "Base.php";

class Rhino extends Creature {
    public function __construct(
        string $name, 
        float $weight, 
        float $maxWeight, 
        float $minWeight, 
        bool $isFemale, 
        float $foodPortion
    ) {
        parent::__construct($name, $weight, $maxWeight, $minWeight, $isFemale, $foodPortion);
    }

    public function interact(): void {
        echo "Rhino " . $this->getName() . " makes a loud noise";
    }
}
?>
