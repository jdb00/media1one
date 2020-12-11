<div class="feature">
    <div class="swiper-container-2">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php get_template_part('partials/content', 'slides')?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination-2"></div>
    </div> 
    <div class="text-wrap">
        <div class="feature-text">
            <h3><?php the_title()?></h3>
            <p><?php the_content()?></p>
            <a href="<?php the_field('url')?>"><?php the_field('url')?></a>
        </div>
    </div>
</div>