<?php
    $logoId = get_field('logo_option', 'options');
    $logo = wp_get_attachment_image($logoId, array('200', '100'));
    $menuItems = wp_get_nav_menu_items('header');
?>

<div class="bg-white">
    <nav class=" max-w-7xl mx-auto px-6 sm:px-12 md:px-0" aria-label="Top">
        <div class="w-full flex items-center justify-between border-b border-blue-medium lg:border-none">
            <div class="flex items-center">
                <a href="<?= home_url(); ?>" title="Accueil">
                    <?= $logo; ?>
                </a>
                <?php if ($menuItems) : ?>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <?php foreach ($menuItems as $item) : ?>
                        <a
                            href="<?= $item->url; ?>"
                            title="<?= $item->title; ?>"
                            class="text-base font-primary font-medium text-primarycolor cursor-pointer"
                        ><?= $item->title; ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="ml-10 space-x-4">
                <a
                href="<?= wp_login_url(); ?>"
                title="Bouton de connexion"
                class="
                    inline-block font-primary bg-primarycolor py-2 px-4 border border-transparent rounded-md text-base font-medium text-white pointer
                    hover:bg-thirdcolor hover:text-white"
                >Connexion</a>
            </div>
        </div>
        <?php if ($menuItems) : ?>
            <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden"> 
                <?php foreach ($menuItems as $item) : ?>
                <a
                    href="<?= $item->url; ?>"
                    title="<?= $item->title; ?>"
                    class="text-base font-primary font-medium text-primarycolor cursor-pointer
                        hover:text-blue-medium"
                ><?= $item->title; ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </nav>
</div>
