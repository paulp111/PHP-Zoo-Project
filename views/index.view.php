<?php
include __DIR__ . "/header.php";
include_once __DIR__ . "/../src/init.php";
?>

<main>
    <div class="animal-list">
        <?php foreach ($zooInstance->getAllAnimals() as $creature) : ?>
            <div class="animal-details">
                <h1>
                    <a href="views/animal.view.php?name=<?= urlencode(str_replace(" ", "", $creature->getName())) ?>"><?= htmlspecialchars($creature->getName()) ?></a>
                </h1>
                <p>Weight:
                    <progress value="<?= $creature->getCurrentWeight() ?>" max="<?= $creature->getMaxWeight() ?>"></progress>
                </p>
                <p><?= htmlspecialchars($creature->interact()); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
