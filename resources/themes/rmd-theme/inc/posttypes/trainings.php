<?php
add_action( 'init', 'firstPixel_custom_post_type_formation' );

function firstPixel_custom_post_type_formation()
{
    $post_type         = "formations";
    $post_type_support = "posts";
    $labels            = array(
        'name'               => 'Formations',
        'singular_name'      => 'Formation',
        'all_items'          => 'Toutes les formations',
        'add_new'            => 'Ajouter une formation',
        'add_new_item'       => 'Ajouter une formation',
        'edit_item'          => "Modifier une formation",
        'new_item'           => 'Nouvelle formation',
        'view_item'          => "Voir la formation",
        'search_items'       => 'Trouver une formation',
        'not_found'          => 'Aucun resultat',
        'not_found_in_trash' => 'Aucun resultat',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Formations',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-portfolio',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );


    register_taxonomy(
        'categories', // slug
        array('formations'), // posttype
        array(
            'label'        => __( 'Categories', 'firstPixel' ), // label
            'rewrite'      => array( 'slug' => 'categories' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
}
