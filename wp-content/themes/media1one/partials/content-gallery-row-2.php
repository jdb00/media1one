
<div class="gallery">
    <?php

        $args = array('post_type' => 'gallery-image-2');
        // The Query
        $the_query = new WP_Query( $args );

        global $active_class;  
        $active_class = 'active';

        // The Loop
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('partials/content', 'gallery-image');

            $active_class = '';
        }

        /* Restore original Post Data */
        wp_reset_postdata();
    ?>
</div>