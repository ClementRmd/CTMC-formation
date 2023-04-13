<?php
    $heightImage = '';
    if ($args['type'] !== 'home') {
        $heightImage = "style='height:400px;'";
    }
?>
<div class="relative bg-blue-medium" <?= $heightImage; ?>>
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="<?= $args['image']; ?>" alt="Image de fond">
        <div class="absolute inset-0 bg-gray-normal mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <?php if ($args['type'] === "home") : ?>
        <div class="blocContainer py-24 sm:py-32">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl"><?= $args['title']; ?></h1>
        </div>
    <?php endif; ?>
</div>

