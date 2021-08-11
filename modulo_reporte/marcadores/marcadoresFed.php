<?php
 
  // Archivo de Conexión a la Base de Datos 
  include('../../conexion/conn.php');
  //$var='Alimentadoras';
 
  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($conn, "SELECT latitud, longitud, siglas FROM base where Area='Federales'");
 
  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
  while ($row = mysqli_fetch_array($result)) {
      echo '["' . $row['siglas'] . '", ' . $row['latitud'] . ', ' . $row['longitud'] . '],';
  }
 
?>