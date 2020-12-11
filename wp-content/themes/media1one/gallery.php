<div class="gallery-header">
        <h2>Gallery</h2>
        <div id="sorts" class="sort-group">  
                <a class="sort-link active" data-filter="*">All</a>
                <a class="sort-link" data-filter=".photo">Photos</a>
                <a class="sort-link" data-filter=".video">Videos</a>
                <a class="sort-link" data-filter=".shoot">Full Shoot</a>
        </div>
</div>
<div class="gallery-wrap">

        <?php get_template_part('partials/content', 'gallery-row-1') ?>
        <?php get_template_part('partials/content', 'gallery-row-2') ?>
        <?php get_template_part('partials/content', 'gallery-row-3') ?>
</div>