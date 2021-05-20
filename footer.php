<footer class="site-footer">

    <div class="contenido-footer">
        <!-- 
        <?php
        $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'
        );
        wp_nav_menu($args)
        ?>

        <p class="copyright">Todos los derechos reservados <?php echo get_bloginfo('name') . " " . date('Y') ?> </p>
         -->

        <div class="footer-contenido">
            <div class="footer-1">
                <h4>Nosotros</h4>
                <p>Institución formadora de profesionales
                    íntegros, competentes y emprendedores.
                    Con preparación humanista, ética, científica y
                    tecnológica para contribuir al
                    desarrollo humano sustentable, así
                    como al fortalecimiento de la sociedad
                    del conocimiento.</p>
            </div>

            <div class="footer-2">
                <h4>Menú</h4>

                <ul>
                    <!-- <li><i class="fas fa-calendar-check"></i><a href=""><span> </span>Eventos</a> </li> -->
                    <li><i class="fas fa-home"></i><a href="/" class="ml-1">Inicio</a> </li>
                    <li><i class="fas fa-users"></i><a href="/index.php/nosotros">Nosotros</a> </li>
                    <li><i class="fas fa-graduation-cap"></i><a href="/index.php/oferta-educativa">Oferta Educativa</a> </li>
                    <li><i class="fas fa-chalkboard-teacher"></i><a href="/index.php/cursos">Cursos</a> </li>
                    <li><i class="fas fa-file"></i><a href="/index.php/documentos"><span> </span>Documentos</a> </li>
                    <li><i class="fas fa-envelope"></i><a href="/index.php/contacto" class="ml-1">Contacto</a> </li>
                </ul>
            </div>

            <div class="footer-3">
                <h4>Contacto</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> <span>Calle narajo num.13
                            entre turqueza y guadalupe
                        </span></li>
                    <li><i class="fas fa-envelope"></i> <span>contacto@iiess.edu.mx
                        </span></li>
                    <li><i class="fas fa-phone-alt"></i> <span>+52 622-224-08-96                        </span></li>
                </ul>
            </div>

            <div class="footer-4">
                <h4>nuestras redes</h4>

                <div class="social-links" id="social-links">
                    <a href="#social-links" data-toggle="tooltip" data-html="true" title="<h5>+52 622 224 08 96</h5>" href=""><i class="fab fa-whatsapp"></i></a>
                    <a target="_blank" href="https://www.instagram.com/iiessedu/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://www.facebook.com/iiessedu"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 120, // offset (in px) from the original trigger point
        delay: 10, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true,
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
<script>

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</script>
</body>

</html>
