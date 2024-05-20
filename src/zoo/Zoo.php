<?php

class Zoo {
    private array $animals = [];

    public function getAllAnimals(): array {
        return $this->animals;
    }

    public function addAnimal(Creature $animal): void {
        $this->animals[] = $animal;
    }

    public function feedAll(): void {
        foreach ($this->animals as $animal) {
            if ($animal->getCurrentWeight() < $animal->getMaxWeight()) {
                $animal->eat();
            }
        }
    }

    public function interactWithAll(): void {
        foreach ($this->animals as $animal) {
            $animal->interact();
        }
    }

    public function makeAllCatsRoar(): void {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Cat) {
                $animal->makeSound();
            }
        }
    }
}
?>
