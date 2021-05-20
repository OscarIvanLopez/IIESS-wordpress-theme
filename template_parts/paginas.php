<?php while (have_posts()) : the_post() ?>

    <h1 class="text-center texto-primario"><?php the_title() ?></h1>

    <?php if (has_post_thumbnail()) :
        the_post_thumbnail("blog", array('class' => 'imagen-destacada'));
    endif;
    ?>

    <?php
    if (get_post_type() === "iiess_eventos") {
        $fecha = get_field('fecha_evento');
    ?>
        <p class="informacion-clase"><?php the_field('fecha_evento') ?> - <?php echo $fecha . " a " . $fecha; ?></p>

    <?php } ?>

    <p><?php the_content(); the_title(); ?></p>

<?php endwhile; ?>
