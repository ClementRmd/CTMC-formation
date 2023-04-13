<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>CTMC formations</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include( TEMPLATE_PATH . '/misc/favicon.php' ); ;?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <?php
        if (!is_404()) :
          get_template_part('templates/header/header', 'main');
        endif;
      ?>
    </header>
    <div class="wrapper bg-gray-light">