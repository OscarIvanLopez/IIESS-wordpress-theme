<?php get_header() ?>

<main class="contenedor pagina seccion no-sidebar">
    <div class=" text-center">
        <!-- Este es el loot que checkea el contenido en loop mamin -->
        <?php get_template_part('template_parts/paginas') ?>

        <?php gymfitness_lista_clases(); ?>
    </div>
</main>
<?php get_footer(); ?>