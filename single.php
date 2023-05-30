<?php get_header() ?>
<div class="container pt-70">
    <div class="row">
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/single', null, []);
        endwhile;
        ?>
    </div>
</div>
<?php get_footer() ?>