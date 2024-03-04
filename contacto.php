<?php
include 'includes/funciones.php';
incluirTemplate('header');

// Mostrar mensaje de confirmación si el formulario se envió
if (isset($_GET['enviado']) && $_GET['enviado'] === 'true') {
    echo '<p style="color: green;">¡El formulario se envió correctamente!</p>';
}

?>

<h1 class="fw-300 centrar-texto">Contacto</h1>
<img class="imagen-contacto" src="/build/img/destacada.jpg" alt="Imagen Principal">

<main class="contenedor seccion contenido-centrado">
    <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>

    <form class="formulario" method="post" action="includes/enviar_correo.php" >
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" required>

            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Tu Correo electrónico" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Tu Teléfono" required>

            <label for="mensaje">Mensaje: </label>
            <textarea name="mensaje" id="mensaje"></textarea>

        </fieldset>

        <input type="submit" value="Enviar" class="boton boton-verde">

    </form>
</main>

<?php
incluirTemplate('footer');
?>