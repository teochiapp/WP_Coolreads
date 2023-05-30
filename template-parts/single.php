<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class=" feature-img rounded-top overflow-hidden">
                <img src="<?php the_post_thumbnail_url('full') ?>" alt="feature" class="full"
                    style=" width: 300px; margin-top:100px; margin-right: 100px;">
            </div>
        </div>
        <div class="col-9 text-center">
            <h2 class="display-1 bd-blog-title mt-5 mb-4"> <?php the_title() ?></h2>
            <p class="fs-5 mt-2"><?php the_field("descripcion") ?></p>
            <div class="bd-content-wrapper">
                <div class="bd-blog-meta d-flex flex-wrap justify-content-center">
                    <div class=" bd-blog-categories me-5 mt-3 mt-md-0">
                        <h5 class="mb-0 mt-1"><?php the_category() ?></h5>
                    </div>
                    <div class="bd-blog-date mt-3 mt-md-0">
                        <span>Finalizado el</span>
                        <h5 class="mb-0 mt-1"><?php the_field("fecha-leido"); ?></h5>
                    </div>
                    <div class="bd-blog-date mt-3 mt-md-0" style="left:50px;">
                        <h5 class="m-1 text-warning">
                            <span>Tu rating:</span> <?php the_field("calificacion") ?>
                        </h5>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <blockquote class="mt-5 mb-30 text-center">
        <p class="display-5 pt-3 text-primary border-top ">
            Tu review:
        </p>
        <h4 class=""><br>"<?php the_field("review") ?>"</h4>
        <h6 class=""><?php the_author() ?></h6>
    </blockquote>

</div>



<?php get_footer() ?>