<?php get_header() ?>
<?php $fecha = get_field('fecha_evento') ?>
<main class="single-evento-wrapper pagina seccion con-sidebar">

    <div class="contenido-evento-wrapper">

        <div class="contenido-principal">
            <h1 class="texto-primario">
                <?php the_title() ?>
            </h1>
            <div class="post-image-wrapper">
                <?php the_post_thumbnail('blog') ?>
            </div>

            <div class="contenido-evento"> 
                <?php the_content() ?> 
            </div>

            <p class="fecha-evento"><?php echo ucfirst($fecha); ?></p>
        </div>


        <?php get_sidebar() ?>
    </div>
</main>

<?php get_footer(); ?>
