<?php get_header() ?>




<!--blog section start-->
<section class="mt-100 pb-120 mt-70">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <div class="col-xxl-7 col-lg-10">
                <div class="blog-left">
                    <div class="title-area mb-4 text-center text-sm-start">
                        <h2 class="mb-2">Últimas novedades de Coolreads</h2>
                        <p class="mb-0">Mantente actualizado de las últimas publicaciones</p>
                    </div>
                    <?php
                    $novedades = new WP_Query([
                        'post_type' => 'novedades',
                        'post_status' => 'publish',
                        'posts_per_page' => 1
                    ]);
                    while ($novedades->have_posts()) {
                        $novedades->the_post();
                    ?>
                    <div class="h4-blog-card bg-white deep-shadow rounded-2 position-relative">

                        <a href="<?php the_permalink() ?>" class="feature-img">
                            <img src="<?php the_post_thumbnail_url('full') ?>" alt="not found"
                                class="img-fluid rounded-2">
                        </a>
                        <span
                            class="text-warning position-absolute category-btn start-0 top-0"><?php the_category() ?></span>
                        <div class="h4-blog-content bg-white">
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>
                    </div>

                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-10">
                <div class="row g-4">
                    <?php
                    $novedades = new WP_Query(['post_type' => 'novedades', 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'posts_per_page' => 3]);
                    while ($novedades->have_posts()) {
                        $novedades->the_post();
                    ?>
                    <div class="col-xl-12">
                        <div class="blog-card d-flex align-items-center bg-white deep-shadow p-25 rounded-2">
                            <div class="feature-thumb position-relative">
                                <a class="" href="<?php the_permalink() ?>">
                                    <img src="<?php the_post_thumbnail_url('full') ?>" width="200px" alt="feature"
                                        class="img-fluid rounded-left">
                                </a>
                                <span class="position-absolute category-btn bg-warning"
                                    style=""><?php the_category() ?></span>
                            </div>
                            <div class="blog-content ms-0 ms-sm-4 mt-3 mt-sm-0">
                                <a class="" href="<?php the_permalink() ?>">
                                    <h4 class="h5"><?php the_title() ?></h4>
                                </a>
                                <div
                                    class="blog-author mt-4 d-flex align-items-start align-items-sm-center justify-content-between">
                                    <div class="author-info">
                                        <span><?php the_date('d/m/Y') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog section end-->

<?php get_footer() ?>