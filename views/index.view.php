<?php
$cssFilePath = '/zoo_project/assets/css/pico.classless.lime.min.css'; 
include __DIR__ . "/../header.php"; 
include_once __DIR__ . "/../src/init.php";
?>

<header>
    <h1>Zoo</h1>
</header>

<main>
    <div class="animal-list">
        <?php foreach ($zooInstance->getAllAnimals() as $creature) : ?>
            <div class="animal-details">
                <h1>
                    <a href="/zoo_project/views/base.view.php?name=<?= urlencode($creature->getName()) ?>"><?= $creature->getName() ?></a>
                </h1>
                <p>Weight:
                    <progress value="<?= $creature->getCurrentWeight() ?>" max="<?= $creature->getMaxWeight() ?>"></progress>
                </p>
                <p><?= $creature->interact(); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
