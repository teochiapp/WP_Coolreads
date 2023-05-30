<?php get_header() ?>
<div class="container pt-70">
    <div class="row">
        <section class="col-md-9 inmuebles-property-card">
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                    get_template_part('template-parts/blog/loop', null, ["class-col" => 'col-md-6']);
                endwhile;
                ?>
            </div>
        </section>
        <aside class="col-md-3">
            <?php dynamic_sidebar('sidebar-blog') ?>
        </aside>
    </div>
</div>
<?php get_footer() ?>