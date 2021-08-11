<?php
 
  // Archivo de Conexión a la Base de Datos 
 include('../conexion/conn.php');
 
  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($conn, "SELECT No_Contrato, Trabajos, latitud, longitud, siglas, estatus FROM base WHERE Area='Alimentadoras' order by estatus asc");
 
  // Creamos una tabla para listar los datos 
  echo "<div class='table-responsive'>";
 
  echo "<table class='table' id='obras'>
          <thead>
            <tr>
              <th scope='col'>Contrato</th>
              <th scope='col'>Trabajos</th>
              <th scope='col'>Estatus</th>
              <th scope='col'>Semaforo</th>
              <th scope='col'>Porcentaje real</th>
              <th scope='col'>Porcentaje esperado</th>
              <th scope='col'>atraso</th>
              <th scope='col'>Accion</th>
              
            </tr>
            </thead>
            <tbody>";
 
  while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td scope='col'>" . $row['siglas'] . "</td>";
      
      echo "<td scope='col'>" . $row['Trabajos'] . "</td>";
      echo "<td scope='col'>" . $row['estatus'] . "</td>";
      if($row['estatus']=='Ejecucion'){
        $result2 = mysqli_query($conn, "SELECT color, porcentaje_real, porcentaje_esperado, atraso FROM semaforo WHERE NoContrato='".$row['No_Contrato']."'");

        while ($row2 = mysqli_fetch_array($result2)){
          if($row2['color']=='Verde'){
             echo "<td scope='col'><font color='#74D52D'><strong><b>" . $row2['color'] . "</strong></td>";
          }if($row2['color']=='Rojo'){
             echo "<td scope='col'><font color='#EE303F'><strong><b>" . $row2['color'] . "</strong></td>";
          }if($row2['color']=='Amarillo'){
             echo "<td scope='col'><font color='#F5CA2C'><strong><b>" . $row2['color'] . "</strong></td>";
          }
          echo "<td scope='col'>" . $row2['porcentaje_real'] . "</td>";
          echo "<td scope='col'>" . $row2['porcentaje_esperado'] . "</td>";
          echo "<td scope='col'>" . $row2['atraso'] . "</td>";
        }
      }else{
        echo "<td scope='col'>Finalizada</td>";
        echo "<td scope='col'>-</td>";
        echo "<td scope='col'>-</td>";
        echo "<td scope='col'>-</td>";
      }

      echo "<td scope='col'><button class='btn btn-primary btn-xs' id='detReporte' onclick='metodo();'>Detalles</button></td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
  echo "</div>";
 
  mysqli_close($conn);
 
?>