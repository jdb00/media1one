<section class="services">
    <div class="services-wrap">
        <h2 class="services-header">services</h2>
        <div class="services-container">
        <?php

            $args = array('post_type' => 'service');
            // The Query
            $the_query = new WP_Query( $args );

            global $active_class;  
            $active_class = 'active';

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content', 'service');

                $active_class = '';
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>
        </div>
    </div>
</section>