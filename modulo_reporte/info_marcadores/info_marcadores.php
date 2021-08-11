<?php
 
  // Archivo de Conexión a la Base de Datos 
 include('../../conexion/conn.php');
 
  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($conn, "SELECT No_Contrato, Trabajos FROM base");
if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){ ?>
    
    ['<div class="info_content">' + '<h3><?php echo $row['No_Contrato']; ?></h3>' + '<p><?php echo $row['Trabajos']; ?></p>' + '</div>'], 
 
    <?php }
  }
?>