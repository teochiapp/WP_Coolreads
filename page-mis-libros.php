<?php
get_header();
?>

<section class="breadcrumb-area bg-primary-gradient">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 class="mb-3">Mis Libros</h2>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="front-page.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Mis Libros</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Prueba Grid -->
<section>
    <div class="container">
        <a href="./agregar-libro">Agregar libro</a>
        <div class="row justify-content-start">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $mis_libros = new WP_Query(
                [
                    'post_type' => 'mis_libros',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'paged' => $paged ? get_query_var('paged') : 1

                ]
            );

            if ($mis_libros->have_posts()) {

                while ($mis_libros->have_posts()) {
                    $mis_libros->the_post();
                    $review = get_field('review');

            ?>
            <div class="col-lg-3 text-center">
                <div class=" card card-fixed bg-white deep-shadow mt-3" style="width: 300px; height: 700px;">
                    <div class=" feature-img rounded-top overflow-hidden">
                        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('full') ?>"
                                alt="feature" class="img-fluid" style="width: 300px;"></a>
                    </div>
                    <div class="card-body position-relative-fixed" style="height: 200px;">
                        <button href="#"
                            class="position-absolute p-1 bg-warning category-btn start-0 top-0"><?php the_category() ?>
                        </button>
                        <a href="">
                            <h3 class="h5 mb-2"><?php the_title() ?></h3>
                        </a>
                        <h5 class="h6 mb-3"> <?php the_field("autor") ?></h5>
                        <!-- <p><?php the_field("descripcion") ?></p> -->

                        <p class="mb-2">Review: <?php if ($review) {
                                                            $extract = wp_trim_words($review, 8); // Cambia '20' al número de palabras que deseas mostrar en el extracto
                                                            echo $extract;
                                                        } ?>
                        </p>
                        <p class="mb-2">Fecha de lectura: <?php the_field("fecha-leido") ?> </p>


                    </div>
                    <div class="card-footer">
                        <p class="m-1 position-relative text-warning">
                            Tu rating: <?php the_field("calificacion") ?></p>
                    </div>
                </div>
            </div>

            <?php
                }
            } else {
                ?>
            <h4>No se encontraron nuevos libros</h4>
            <?php
            }


            ?>
            <div class="justify-content-center">
                <div class="template-pagination mt-60">
                    <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                            <a>
                                <?php
                                echo paginate_links(array(
                                    'total' => $mis_libros->max_num_pages,
                                    "current" => "0",
                                    "prev_text" => "-1",
                                    "next_text" => "+1",
                                    "show_all" => true,



                                ));


                                ?>

                            </a>

                        </li>
                        <li> <a><i class=" fa-solid fa-arrow-right"></i>
                                <?php
                                echo paginate_links(array());
                                ?>
                        </li></a>
                    </ul>
                    <div>
                    </div>


                    <?php

                    //end while
                    wp_reset_postdata();
                    ?>

                    <!-- Paginación -->


                </div>

            </div>


</section>



<!--breadcrumb area end-->




<?php
get_footer();
?>