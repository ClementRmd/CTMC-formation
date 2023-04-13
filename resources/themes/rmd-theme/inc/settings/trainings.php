<?php
function getTrainingsPost($items)
{
    if ($items->have_posts()) :
        while ( $items->have_posts() ) :
            $items->the_post();

            $categoryByPost = wp_get_object_terms(get_the_ID(), 'categories');
            
            $sectionPost = array(
                'type' => ($categoryByPost && $categoryByPost[0]->name) ? $categoryByPost[0]->name : '',
                'title' => get_the_title(),
                'content' => get_the_excerpt(),
                'image' => (get_the_post_thumbnail_url())
                    ? get_the_post_thumbnail_url()
                    : IMAGES_URL.'/logo.png',
                'link' => get_the_permalink(),
            );

            get_template_part('components/views/section', 'post', $sectionPost);
        endwhile;
        wp_reset_postdata();
    endif;
}
