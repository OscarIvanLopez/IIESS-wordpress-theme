<?php get_header()  ?>
<!-- 
/* 
* Template Name: Cursos
*/
-->
<div class="oferta-hero cursos-hero">
    <h1 class="text-center oferta-titulo">Cursos</h1>
    <hr class="linea-baja-blanca">
</div>

<div class="">
	 <div class="cursos">
        <div class="titulo" data-aos="fade-up">
            <h2>Cursos Póstecnicos</h2>
            <hr />
        </div>
        <div class="cursos-contenido" data-aos="fade-up">
            <h4>Gestión y Educación en Enfermería</h4>
            <hr />

            <div class="cursos-contenedor">
                <div class="inscripciones">
                    <i class="fas fa-book-open"></i>
                    <h4>¡INSCRIPCIONES ABIERTAS!</h4>
                </div>
                <div class="inicio">
                    <i class="fas fa-flag"></i>
                    <h3>INICIO</h3>
                    <h4>15 de Enero del <?php $year = date('Y');
                                        echo $year; ?></h4>
                </div>
            </div>
            <div class="cursos-requisitos">
                <h5>Requisitos</h5>
                <hr>
                <ul>
                    <li>
                        Título Profesional
                    </li>
                    <li>
                        Certificado de Calificaciones
                    </li>
                    <li>
                        Cédula Profesional
                    </li>
                    <li>
                        Acta de Nacimiento
                    </li>
                    <li>
                        CURP
                    </li>
                    <li>
                        Carta de Trabajo
                    </li>
                    <li>
                        Carta de Exposición de Motivo
                    </li>
                    <li>
                        2 Fotografías tamaño infantil (Blanco y Negro)
                    </li>
                </ul>
            </div>


        </div>
    </div>


    <div class="lic-enfermeria" data-aos="fade-up">
        <div class="titulo">
            <h2 class="enfermeria-titulo">Enfermería Quirurgica</h2>
            <hr />
        </div>

        <div class="lic-contenido">
            <hr />
            <div class="cursos-contenedor">
                <div class="inscripciones-alt">
                    <i class="fas fa-book-open"></i>
                    <h4>¡INSCRIPCIONES ABIERTAS!</h4>
                </div>
                <div class="inicio-alt">
                    <i class="fas fa-flag"></i>
                    <h3>INICIO</h3>
                    <h4>Enero del <?php $year = date('Y');
                                    echo $year; ?></h4>
                </div>
            </div>
            <div class="semestre">
                <h5>Requisitos</h5>
                <hr>
                <ul>
                    <li>Anatomía y Fisiología</li>
                    <li>Salud Pública</li>
                    <li>
                        Socio Antropología
                    </li>
                    <li>
                        Inglés Técnico 1
                    </li>
                    <li>
                        Tecnología de Información y Comunicación
                    </li>
                    <li>
                        Modelos y Teorías de Enfermería
                    </li>
                    <li>
                        Comunicación Oral y Escrita
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php get_footer()  ?>