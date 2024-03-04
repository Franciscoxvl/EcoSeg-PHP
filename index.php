<?php
include 'includes/funciones.php';



$inicio = true;
incluirTemplate('header', $inicio);
?>

<section class="contenedor seccion">
    <h2 class="fw-300 centrar-texto">Sobre Nosotros</h2>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="/build/img/candado.png" alt="Icono Seguridad">
            <h3>Seguridad</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>

        <div class="icono">
            <img src="/build/img/dinero.png" alt="Icono Mejor Precio">
            <h3>El Mejor Precio</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>

        <div class="icono">
            <img src="/build/img/reloj.png" alt="Icono a Tiempo">
            <h3>A Tiempo</h3>
            <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
        </div>
    </div>
</section>

<main class="seccion contenedor">
    <h2 class="fw-300 centrar-texto">Algunos de nuestros productos</h2>

    <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php';
    ?>
    

    <div class="ver-todas">
        <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
    </div>
</main>

<section class="imagen-contacto">
    <div class="contenedor contenido-contacto">
        <h2>Consigue el mejor equipo de seguridad del pais</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton boton-amarillo">Contactános</a>
    </div>
</section>



<?php
incluirTemplate('footer');
?>