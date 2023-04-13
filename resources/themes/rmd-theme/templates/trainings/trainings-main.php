<?php
    $taxonomies = get_terms( array(
        'taxonomy' => 'categories',
        'hide_empty' => false,
    ) );

    $args = array(
        'post_type' => 'formations',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    if (isset($_GET['category']) && $_GET['category']) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'categories',
                'field'    => 'slug',
                'terms'    => $_GET['category'],
            ),
        );
    }
    $query = new WP_Query( $args );

    echo '<div class="blocContainer">';
        get_template_part('templates/trainings/views/filter', '', ['taxonomies' => $taxonomies]);
        get_template_part('templates/trainings/views/lists', '', ['query' => $query]);
    echo '</div>';
?>