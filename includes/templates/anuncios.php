<?php 
    require 'includes/config/database.php';
    $db = conectarDb();
    $consulta = "SELECT * FROM inventario LIMIT $limite" ;
    $resultado = mysqli_query($db, $consulta);

?>

<div class="contenedor-anuncios">
<?php while($elemento = mysqli_fetch_assoc($resultado)): ?>
        <div class="anuncio">
            <img src="/imagenes/<?php echo $elemento['ubicacion']; ?>" alt="Anuncio casa en el lago">
            <div class="contenido-anuncio">
                <h3><?php echo $elemento['nombre']; ?></h3>
                <p><?php echo $elemento['descripcion']; ?></p>
                <p class="precio">$ <?php echo $elemento['precio']; ?></p>


                <a href="anuncio.php?id=<?php echo $elemento['id']; ?>" class="boton boton-amarillo d-block">Ver Producto</a>
            </div>
        </div>

<?php endwhile;  ?>
    </div>

    <?php 
mysqli_close($db);
?>
