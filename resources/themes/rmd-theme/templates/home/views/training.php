<?php
    $sectionTitle = array(
        'title' => get_field('title_home_training'),
    );
    $image = wp_get_attachment_image( get_field('img_home_training'), 'post-thumbnail', false, array( "class" => "rounded object-cover" ) );
    $taxonomies = get_terms( array(
        'taxonomy' => 'categories',
        'hide_empty' => false,
    ) );
?>

<section class="home-training">
    <?php get_template_part('components/views/section', 'title', $sectionTitle); ?>
    <div class="flex flex-col lg:flex-row">
        <div class="flex w-full lg:w-1/2 shadow-lg rounded mb-6 lg:mb-0">
            <?= $image; ?>
        </div>

        <?php if ( !empty($taxonomies) ) : ?>
            <div class="flex flex-col justify-center w-full lg:w-1/2">
                <?php foreach( $taxonomies as $category ) : ?>
                    <a
                        href="<?= home_url('formations') . '?category=' . $category->slug; ?>"
                        class="bg-white shadow-lg border-l-8 py-4 pl-6 lg:ml-4 my-2 rounded cursor-pointer"
                        style="border-left: 10px solid <?= get_field('training_color_categorie', $category); ?>"
                    >
                        <span class="font-primary text-gray-dark"><?= $category->name; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>