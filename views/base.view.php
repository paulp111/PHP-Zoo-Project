<?php
include __DIR__ . "/../header.php"; 
include_once __DIR__ . "/../src/init.php";

if (isset($_GET["name"]) && isset($zooInstance)) {
    foreach ($zooInstance->getAllAnimals() as $creature) {
        if ($creature->getName() === urldecode($_GET["name"])) {
            $selectedAnimal = $creature;
            break;
        }
    }
} else {
    $selectedAnimal = null;
}
?>

<main>
    <?php if ($selectedAnimal): ?>
        <h2><?= $selectedAnimal->getName() ?></h2>
        <p>Gender: <?= $selectedAnimal->getGender() ?></p>

        <?php if ($selectedAnimal instanceof Cat): ?>
            <p>Danger Level: 
                <progress value="<?= $selectedAnimal->getDangerLevel() ?>" max="5"></progress>
            </p>
            <p><?php $selectedAnimal->makeSound(); ?></p>
        <?php else: ?>
            <p>This animal does not have a danger parameter</p>
            <p><?php $selectedAnimal->interact(); ?></p>
        <?php endif; ?>

        <div>
            <p>Min. Weight: (<?= $selectedAnimal->getMinWeight() ?> kg)
                <progress value="<?= $selectedAnimal->getMinWeight() ?>" max="<?= $selectedAnimal->getMaxWeight() ?>"></progress>
            </p>
            <p>Current Weight: (<?= $selectedAnimal->getCurrentWeight() ?> kg)
                <progress value="<?= $selectedAnimal->getCurrentWeight() ?>" max="<?= $selectedAnimal->getMaxWeight() ?>"></progress>
            </p>
            <p>Max. Weight: (<?= $selectedAnimal->getMaxWeight() ?> kg)
                <progress value="<?= $selectedAnimal->getMaxWeight() ?>" max="<?= $selectedAnimal->getMaxWeight() ?>"></progress>
            </p>
        </div>
    <?php endif; ?>

    <a href="../index.php">&larr; Back to the Zoo</a>
</main>
