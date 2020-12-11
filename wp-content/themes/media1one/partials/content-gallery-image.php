<?php 
    $terms = get_the_terms( get_the_ID(), 'type' );
    
    $classes = '';
    foreach($terms as $term){
        $classes .= $term->slug.' ';
    }
    //if video echo
    // <div class="gallery-item <?php echo $classes?(video)>">
    //     <iframe src="url" alt=""></iframe> process url to be youtube.com/+embed/+videoid+?autoplay=1&mute=1
    // </div>
    // 
    // <div class="gallery-item">
    //     <iframe src="https://www.youtube.com/embed/eI4an8aSsgw?autoplay=1&mute=1" alt="">
    //     </iframe> 
    // </div>
    
?>

<div class="gallery-item <?php echo $classes?>">
    <img src="<?php the_field('image')?>" alt="">
</div>


