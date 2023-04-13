<?php
    $sectionTitle = array(
        'title' => get_field('title_home_post'),
    );

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3
    );
    $query = new WP_Query( $args );
?>

<section class="home-posts">
    <?php get_template_part('components/views/section', 'title', $sectionTitle); ?>
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
        <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();

                    $sectionPost = array(
                        'type' => 'Article',
                        'title' => get_the_title(),
                        'content' => get_the_excerpt(),
                        'image' => get_the_post_thumbnail_url(),
                        'link' => get_the_permalink(),
                    );

                    get_template_part('components/views/section', 'post', $sectionPost);
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</section>

