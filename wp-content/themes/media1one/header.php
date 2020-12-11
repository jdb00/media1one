<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=BenchNine:wght@300;400;700&family=Nunito+Sans:ital,wght@0,200;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">
    <title>MEDIA1ONE</title>
    <?php wp_head()?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="navbar nav-container navbar navbar-expand-lg navbar-light bg-dark" id="nav-container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/Robin-logodev6.png" class="align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse center" id="navbarSupportedContent">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav'
                ) ); 
                ?>
              <div class="social-container">
                <a href="https://www.instagram.com/media1one.nz/"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo site_url('/contact');?>"><i class="far fa-envelope"></i></a>
                </div>  
            </div>
                
            </div>
        </div>
    </nav>