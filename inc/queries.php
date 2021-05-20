<?php

function iiess_lista_eventos()
{ ?>
    <ul class="lista-clases">
        <?php
        $args = array(
            'post_type' => 'iiess_eventos',
            'post_per_page' => 1000,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $clases = new WP_Query($args);
        while ($clases->have_posts()) : $clases->the_post() ?>

            <li class="clase card gradient">
                <?php the_post_thumbnail('mediano') ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ?></h3>


                    <?php
                    $fecha_evento = get_field('fecha_evento');
                    ?>
                    <p><?php echo ucfirst($fecha_evento); ?> </p>
                    </a>
                </div>
            </li>

        <?php endwhile;
        wp_reset_postdata()  ?>
    </ul>

<?php
}
