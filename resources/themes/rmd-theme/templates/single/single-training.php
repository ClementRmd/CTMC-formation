<?php
global $post;

$image = (get_the_post_thumbnail_url($post->ID))
    ? get_the_post_thumbnail_url($post->ID)
    : 'https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100';
$heroInfos = array(
    'type' => 'post',
    'image' => $image,
);

$data = array(
    'postid' => $post->ID,
    'program' => get_field('text_program_training', $post->ID),
    'infos' => get_field('text_infos_training', $post->ID)
);

get_template_part('components/views/section', 'hero', $heroInfos);
?>

<div class="blocContainer pt-12">
    <h1 class="text-4xl font-primary text-gray-normal pb-12 sm:text-5xl"><?= ucfirst(strtolower($post->post_title)); ?></h1>
    <div class="wysiwyg">
        <?= the_content($post->ID); ?>
    </div>
    <?php get_template_part('templates/single/views/trainings/menu', '', $data); ?>
</div>
