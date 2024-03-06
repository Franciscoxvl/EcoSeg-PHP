<?php
include 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="seccion contenedor">
    <h2 class="fw-300 centrar-texto">Catalogo completo</h2>

    <?php 
        $limite = 9;
        include 'includes/templates/anuncios.php';
    ?>
</main>

<?php
incluirTemplate('footer');
?>