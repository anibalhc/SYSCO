<?php
session_start();

if(empty($_SESSION['admin'])){
  echo '<script> window.location="../index.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Laboratorios | SCT</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/examples.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">SCT</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <?php
                    require("../navbar-header.php");
                    ?>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                <div class="row"> 
                    <div class="col-md-12 ">
                        <center>
                        <h2>Direccion General</h2>    
                        
                        </center>      
                    </div>
                </div>
            
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php
        require("../menu_lateral.php");
        ?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row">
                    <div class="col-md-12 ">
                        <center>
                        <h3>Informe de Trabajo</h3>    
                        <h4>(Seguimiento, Avance y Resultados)</h4>
                        </center>      
                    </div>
                </div>
                <div class="col-md-4">          
                                <label for="tipo_status">Area:</label>
                                <select id="slc_area" name="tipo_status" onchange="initMap(); area();" class="form-control">
                                  <option value="Todas">Todos</option>
                                  <option value="Conservacion">Conservación</option>
                                  <option value="Alimentadoras" >Alimentadoras</option>
                                  <option value="Federales" >Federales</option>
                                </select>
                        </div>
                <!-- ============================================================== -->
                     
                    </div>

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                 <h4 class="card-title">Centro SCT Veracruz</h4>
                                <div id="map"></div>
                      <h2 class="h2s" id="titulo">Obras</h2>
                      <div class="row">
                        <div class="col-md-3">
                          <button class="btn btn-success" style="width: 90%;" data-toggle="collapse" data-target="#demo" onclick="verde();">Verde</button>
                        </div>
                        <div class="col-md-3">
                          <button class="btn btn-warning" style="width: 90%;" data-toggle="collapse" data-target="#amarillo" onclick="amarillo();">Amarillo</button>
                        </div>
                        <div class="col-md-3">
                          <button class="btn btn-danger" style="width: 90%;" data-toggle="collapse" data-target="#rojo" onclick="rojo();">Rojo</button>
                        </div>
                        <div class="col-md-3">
                          <button class="btn btn-dark" style="width: 90%;" data-toggle="collapse" data-target="#finalizadas" onclick="finalizadas();">Finalizadas</button>
                        </div>
                      </div>
                      
                                      <hr>
                                    <div id="demo" class="collapse">
                                        <div class="table-responsive" id="ListVerde"></div>
                                    </div>
                                    <div id="amarillo" class="collapse">
                                        <div class="table-responsive" id="ListAmarillo"></div>
                                    </div>
                                    <div id="rojo" class="collapse">
                                        <div class="table-responsive" id="ListRojo"></div>
                                    </div>
                                    <div id="finalizadas" class="collapse">
                                        <div class="table-responsive" id="ListFinalizadas"></div>
                                    </div>
 
    <!-- Archivo PHP con la lógica para mostrar una tabla con las ubicaciones --> 
 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            require("../footer.php");
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <script src="funciones.js"></script>

  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../js/gmaps.js"></script>
 
        
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>

</body>

</html>

<script>
  var aux='';
  function area(){
    var aux = document.getElementById('slc_area').value;
    //console.log(aux);
    return aux;
    //var someSessionVariable = '@Session["ShowMessage"]';


  }
</script>

<script>
  
function initMap() {

          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'roadmap'
          };
 
          map = new google.maps.Map(document.getElementById('map'), {
              mapOptions
          });
 
          map.setTilt(50);
          var aux2=area();
          //console.log(aux2);
          //window.location.href = window.location.href + "?aux2=" + aux2;
          var marcadores='';
          var ventanaInfo='';
          

          if(aux2=="Alimentadoras"){
            marcadores = [
            <?php include('marcadoresAli.php'); ?>
            ];
            ventanaInfo = [
            <?php include('info_marcadoresAli.php'); ?>
            ];
            //$('#tab').load("appAli.php"); 

          }else if(aux2=='Conservacion'){
            marcadores = [
            <?php include('marcadoresCon.php'); ?>
            ];
            ventanaInfo = [
            <?php include('info_marcadoresCon.php'); ?>
            ];
           // $('#tab').load("appCon.php");

          }else if(aux2=="Federales"){
           marcadores = [
           <?php include('marcadoresFed.php'); ?>
           ];
           ventanaInfo = [
           <?php include('info_marcadoresFederal.php'); ?>
           ];
           //$('#tab').load("appFed.php");
         }else if (aux2=='Todas'){
          marcadores = [
          <?php include('marcadores.php'); ?>
          ];
          ventanaInfo = [
          <?php include('info_marcadores.php'); ?>
          ];
          //$('#tab').load("app.php"); 
        }

          // Crear múltiples marcadores desde la Base de Datos 
        
          
          //console.log(info_marcadores);
 
          // Creamos la ventana de información para cada Marcador
         

          // Creamos la ventana de información con los marcadores 
          var mostrarMarcadores = new google.maps.InfoWindow(),
              marcadores, i;
 
          // Colocamos los marcadores en el Mapa de Google 
          for (i = 0; i < marcadores.length; i++) {
              var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: marcadores[i][0]
              });
 
              // Colocamos la ventana de información a cada Marcador del Mapa de Google 
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      mostrarMarcadores.setContent(ventanaInfo[i][0]);
                      mostrarMarcadores.open(map, marker);
                  }
              })(marker, i));
 
              // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
              map.fitBounds(bounds);
          }
 
          // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(14);
              google.maps.event.removeListener(boundsListener);
          });
 
      }
 
      // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
      google.maps.event.addDomListener(window, 'load', initMap());


</script>