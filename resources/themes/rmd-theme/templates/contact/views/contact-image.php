<?php
    global $post;
    $image = get_the_post_thumbnail_url($post->ID, 'full');
?>
<div class="lg:absolute lg:inset-0">
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div style="background: center / contain url(<?= $image; ?>) no-repeat; height: 100%;"></div>
    </div>
</div>
