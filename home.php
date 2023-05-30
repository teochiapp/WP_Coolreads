<?php get_header() ?>
<div class="container pt-70">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mb-50"><?php wp_title('');   ?></h1>
        </div>
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/blog/loop', null, ["class-col" => 'col-md-4']);
        endwhile;

        the_posts_pagination(array(
            'mid_size' => 4,
            'before_page_number' => "",
            'after_page_number' => "",
            'prev_text' => __('<i class="fs-14 fa fa-chevron-left"></i>', 'sarmiento'),
            'next_text' => __('<i class="fs-14 fa fa-chevron-right"></i>', 'sarmiento'),
            'screen_reader_text' => ' '
        ));
        ?>
    </div>
    </main>
    <?php get_footer() ?>