<?php 
$images = get_field('galerie_home');
$sectionTitle = array(
    'title' => 'Galerie d\'images',
);
?>

<?php if( $images ): ?>
    <section class="splide" id="slider1">
        <?php get_template_part('components/views/section', 'title', $sectionTitle); ?>
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                    foreach( $images as $image ):
                        ?>
                            <li class="splide__slide">
                                <div
                                    style="
                                        background: center / cover no-repeat url(<?= $image['url']; ?>);
                                        height:400px;
                                    "
                                ></div>
                            </li>
                        <?php
                    endforeach;
                ?>
            </ul>
        </div>
    </section>
<?php endif;
