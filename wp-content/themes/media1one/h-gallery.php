<section class="recent-works">
            <div class="recent-wrapper">
                <div class="text-wrap">
                    <h2>Recent Work</h2>
                    <a href="<?php echo site_url('/gallery'); ?>">View Gallery</a>
                </div>
                <div class="h-gallery-wrap">
                    <div class="swiper-container-3">
                        <div class="swiper-wrapper">
                        <?php

                            $args = array('post_type' => 'h-slide');
                            // The Query
                            $the_query = new WP_Query( $args );

                            global $active_class;  
                            $active_class = 'active';

                            // The Loop
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                get_template_part('partials/content', 'hslides');

                                $active_class = '';
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();

                        ?>  
                        </div>       
                    </div>
                    <div class="button-container">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/310634.svg" class="prev-btn"></img>
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/310633.svg" class="next-btn"></img>
                    </div>
                </div>
            </div>

        </section>