<?php

$id =  $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if(!$id) {
    header('Location: /');
}

// Consultar la propiedad
require 'includes/config/database.php';
$db = conectarDb();
$consulta = "SELECT * FROM inventario WHERE id = $id";
// echo $consulta;
$resultado = mysqli_query($db, $consulta);
$producto = mysqli_fetch_assoc($resultado);

// Incluir template
include 'includes/funciones.php';
incluirTemplate('header');
?>

<h1 class="fw-300 centrar-texto"><?php echo $producto['nombre']; ?></h1>
<img class="imagen-anuncio" src="/imagenes/<?php echo $producto['ubicacion']; ?>" alt="Imagen Producto">

<main class="contenedor seccion contenido-centrado">
    <div class="resumen-producto">
        <p class="precio">$<?php echo $producto['precio']; ?></p>
    </div>
    <!--.resumen-producto-->

    <p><?php echo $producto['descripcion']; ?></p>
</main>

<?php
incluirTemplate('footer');
?>