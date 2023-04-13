<?php if ($args['taxonomies']) : ?>
    <div class="filter-trainings flex py-12">
        <?php foreach ($args['taxonomies'] as $item) :
            $bgClass = (isset($_GET['category']) && $_GET['category'] === $item->slug) ? "btnActive" : "";
        ?>
            <div
                class="filter-trainings__item relative bg-white shadow px-6 py-2 mr-8 cursor-pointer <?= $bgClass; ?>"
                data-slug="<?= $item->slug; ?>"
            >
                <span class="font-primary"><?= $item->name; ?></span>
                <div class="absolute top-0 left-full font-primary text-gray-dark" style="transform: translate(-50%, -50%);">
                    <span class="bg-blue-light text-white px-4 py-1 rounded-full"><?= $item->count; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>