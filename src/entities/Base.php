<?php

abstract class Creature {
    protected string $name;
    protected float $currentWeight;
    protected float $maxWeight;
    protected float $minWeight;
    protected bool $isFemale;
    protected float $foodIntake;

    public function __construct(
        string $name,
        float $weight,
        float $maxWeight,
        float $minWeight,
        bool $isFemale,
        float $foodPortion
    ) {
        $this->name = $name;
        $this->currentWeight = $weight;
        $this->maxWeight = $maxWeight;
        $this->minWeight = $minWeight;
        $this->isFemale = $isFemale;
        $this->foodIntake = $foodPortion;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMinWeight(): float {
        return $this->minWeight;
    }

    public function getGender(): string {
        return $this->isFemale ? 'Female' : 'Male';
    }

    abstract public function interact(): void;

    public function eat(): void {
        if (($this->getCurrentWeight() + $this->getFoodIntake()) <= $this->getMaxWeight()) {
            $this->setCurrentWeight($this->getCurrentWeight() + $this->getFoodIntake());
        }
    }

    public function getCurrentWeight(): float {
        return $this->currentWeight;
    }

    public function getFoodIntake(): float {
        return $this->foodIntake;
    }

    public function getMaxWeight(): float {
        return $this->maxWeight;
    }

    public function setCurrentWeight(float $newWeight): void {
        $this->currentWeight = $newWeight;
    }
}
?>