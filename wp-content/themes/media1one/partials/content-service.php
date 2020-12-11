<div class="service" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php the_field('image') ?>); background-position: center; background-size: cover;">
    <h1><?php the_title()?></h1>
    <p><?php the_field('description')?></p>
    <a href="<?php echo site_url('/contact'); ?>"><h2>Get a Quote</h2></a>
</div>