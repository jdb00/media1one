<section class="hero">
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php

              $args = array('post_type' => 'slide');
              // The Query
              $the_query = new WP_Query( $args );

              global $active_class;  
              $active_class = 'active';
              
              // The Loop
              while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('partials/content', 'slides');

                  $active_class = '';
              }

              /* Restore original Post Data */
              wp_reset_postdata();

            ?>
            
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-next"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div> 
    <div class="cta">
        <div class="cta-content">
            <div class="text">
                <h1>Specialist Auto Photography</h1>
                <a href="<?php echo site_url('/gallery'); ?>">View Gallery</a>
                <div class="scroll-cta">
                <svg width="40" height="40" viewBox="0 0 50 130">
                    <rect id="scroll" x="0" y="5" rx="25" ry="25" width="50" height="120" stroke="#FFF" fill="#FFF" stroke-width="4" fill-opacity="0"></rect>
                    <circle id="circle--shape" cx="25" cy="32" r="8" fill="#FFF"></circle>
                </svg>
            </div>
            </div>
            
        </div>
    </div>
</section>