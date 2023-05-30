<?php get_header() ?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>

<?php endwhile; ?>
<?php else : ?>
<p>No se encontraron publicaciones en esta categoría.</p>
<?php endif; ?>


<?php get_footer() ?>