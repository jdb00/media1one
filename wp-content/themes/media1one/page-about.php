<?php get_header()?>
    <main>



    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
        get_template_part('partials/content', 'about');
        endwhile; 
    endif; 
    ?>




    </main>

<?php get_footer()?>