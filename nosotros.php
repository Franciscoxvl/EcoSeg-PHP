<?php
include 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="fw-300 centrar-texto">Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <img src="/build/img/nosotros.jpg" alt="Imagen Sobre Nosotros">
        </div>
        <div class="texto-nosotros">
            <blockquote>25 Años de Experiencia</blockquote>

            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.</p>

            
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>

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

<?php
incluirTemplate('footer');
?>