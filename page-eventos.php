<?php get_header() ?>
<!-- 
    /* 
    * Template Name: Eventos
    */
 -->

 <div class="oferta-hero eventos-hero">
    <h1 class="text-center oferta-titulo">Eventos</h1>
    <hr class="linea-baja-amarilla">
</div>

<div class="eventos-page-wrapper">
    <div class="eventos-wrapper">
    <h1 class="texto-primario titulo-eventos">Somos Excelentes ¡Somos IIESS!</h1>
        <?php get_template_part('template-parts/paginas') ?>


    <?php  iiess_lista_eventos() ?>

    </div>
</div>
<?php get_footer() ?>

