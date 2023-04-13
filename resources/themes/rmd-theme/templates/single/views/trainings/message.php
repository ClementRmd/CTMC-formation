<?php
    $name = $args['name'];
    $text = $args['text'];
?>

<div class="w-full">
    <div class="font-secondary italic font-bold text-gray-normal border-b-2 mt-6">
        <?= $name; ?>
    </div>
    <div class="font-secondary mb-6 text-base">
        <?= $text; ?>
    </div>
</div>