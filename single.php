<?php get_header() ?>

<main class="contenedor pagina seccion con-sidebar">
    <div class="contenido-principal">

        <!-- Este es el loot que checkea el contenido en loop mamin -->
        <?php get_template_part('template_parts/paginas') ?>

    </div>

    <?php get_sidebar() ?>
</main>



<?php get_footer(); ?>