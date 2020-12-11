    <footer>
        <div class="footer-wrap">
        <h2>Contact</h2>
            <div class="footer-container">
                <div class="contact-form">
                    <?php echo do_shortcode( '[contact-form-7 id="contact-form-7" title="Contact form 1"]' ); ?>
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/robin-logodev6.png" alt="">
                    <div class="social-container">
                        <a href="https://www.instagram.com/media1one.nz/"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo site_url('/contact'); ?>"><i class="far fa-envelope"></i></a>
                    </div>  
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/script.js"></script>
    <?php wp_footer()?>

</body>
</html>