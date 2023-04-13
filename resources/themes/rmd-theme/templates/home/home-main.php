<?php

$image = (get_the_post_thumbnail_url(get_the_ID()))
    ? get_the_post_thumbnail_url(get_the_ID())
    : 'https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100';
$heroInfos = array(
    'type' => 'home',
    'image' => $image,
    'title' => get_the_title(),
);

get_template_part('components/views/section', 'hero', $heroInfos);

echo '<div class="blocContainer">';
    get_template_part('templates/home/views/training');
    get_template_part('templates/home/views/posts');
    get_template_part('templates/home/views/slider');
echo '</div>';
