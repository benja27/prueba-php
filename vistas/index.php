<div class="d-flex flex-column justify-content-between min-vh-100" >  
  <?php include_once "shared/header.php" ?>
  <?php include_once "shared/conexion.php";
  $query = "INSERT INTO users (name, password ) VALUES ('Mariano', '1234')";
  if (mysqli_query($coneccion, $query)) {
    echo "Nuevo usuario insertado correctamente";
} else {
    echo "Error al insertar usuario: " . mysqli_error($coneccion);
}
  
  
  
  ?>  


  
  
  <?php include_once "shared/footer.php" ?>  
</div>


