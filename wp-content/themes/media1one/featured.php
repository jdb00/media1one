<section class="featured">
    <svg class="section-decor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <!-- <polygon points="0,100 100,0 100,100" /> -->
        <polygon points="100,0 0,100 0,0" />
    </svg>
    <div class="featured-wrap">
        <h2>Featured Shoots</h2>
        <div class="featured-container">
        <?php

            $args = array('post_type' => 'feature');
            // The Query
            $the_query = new WP_Query( $args );

            global $active_class;  
            $active_class = 'active';

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content', 'feature');

                $active_class = '';
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>

        </div>
    </div>
</section>