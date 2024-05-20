<main>
    <div class="animal-list">
        <?php foreach ($zooInstance->getAllAnimals() as $creature) : ?>
            <div class="animal-details">
                <h1>
                    <a href="views/animal_view.php?name=<?= str_replace(" ", "", $creature->getName()) ?>"><?= $creature->getName() ?></a>
                </h1>
                <p>Weight:
                    <progress value="<?= $creature->getCurrentWeight() ?>" max="<?= $creature->getMaxWeight() ?>"></progress>
                </p>
                <p><?= $creature->interact(); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
