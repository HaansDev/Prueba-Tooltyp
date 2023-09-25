<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>

            <article>
                <h1><?php the_title(); ?></h1>
                <p>Fecha de publicación: <?php the_date(); ?></p>
                <div><?php the_content(); ?></div>
            </article>

            <?php endwhile; ?>
            <?php else : ?>
            <p>No se encontraron noticias.</p>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <!-- Puedes agregar un widget de barra lateral o contenido relacionado aquí -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
