
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Detalles de obra | SCT  </title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
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
            <div class="navbar-header">
                    <?php
                    require("../navbar-header.php");
                    ?>
            </div>
            <!--div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                </ul>
 
            </div-->            
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        require("../menu_lateral.php");
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Detalles de Obra</h3>
                        <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a>Detalles de obra</a></li-->
                      
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="../modulo_listado_obras/" class="btn waves-effect waves-light btn btn-danger pull-right"><i class="text-light fa fa-toggle-left"></i> Regresar</a>
                    </div>                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-2"><strong>No. Licitación:</strong></label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Licitacion" name="Licitacion" readonly>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-light" onclick="cuadro();">Ver</button>
                                        </div>
                                        <label class="col-md-2"><strong>Tipo de procedimiento:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Tipo_de_procedimiento" name="Tipo_de_procedimiento">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-2"><strong>Motivo de adjudicación:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Motivo_de_adjudicacion" name="Motivo_de_adjudicacion">
                                        </div>
                                        <label class="col-md-2"><strong>Número de contrato:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="No_Contrato" name="No_Contrato">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-2"><strong>Trabajos:</strong></label>
                                        <div class="col-md-10">
                                            <textarea id="Trabajos" name="Trabajos" cols="100" rows="5" class="form-control form-control-line"></textarea>
                                           
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                         <label class="col-md-2"><strong>Tipo de Recurso:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Tipo_de_Recurso" name="Tipo_de_Recurso">
                                        </div>
                                        <label class="col-md-2"><strong>Residente a cargo:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Residente_a_cargo" name="Residente_a_cargo">
                                        </div>
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <div class="row">
                                         <label class="col-md-2"><strong>Area:</strong></label>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Area" name="Area">
                                        </div>
                                        <label class="col-md-2"><strong>Empresa:</strong></label>
                                        <div class="col-md-3">
                                            <textarea id="Empresa" name="Empresa" cols="70" rows="2" class="form-control form-control-line"></textarea>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" style="width: 100%;" class="btn btn-info" id="btnEmpresa" name="btnEmpresa" onclick="prueba();"><i class="text-light fa fa-eye"></i> Ver más</button>
                                        </div>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <div class="row">
                                         <label class="col-md-2"><strong>Monto con IVA:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Monto_con_iva" name="Monto_con_iva">
                                        </div>
                                        <label class="col-md-2"><strong>Anticipo con IVA:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Anticipo_con_iva" name="Anticipo_con_iva">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                         <label class="col-md-2"><strong>Fecha del Fallo:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Fe_fallo" name="Fe_fallo">
                                        </div>
                                        <label class="col-md-2"><strong>Fecha de firma del contrato:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Fe_firma_contrato" name="Fe_firma_contrato">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                         <label class="col-md-2"><strong>Plazo en dias naturales:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="plazo" name="plazo">
                                        </div>
                                        <label class="col-md-2"><strong>Laboratorio de control de calidad:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Laboratorio" name="Laboratorio">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2"><strong>Fecha de inscripcion en SIAC:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="" class="form-control form-control-line" id="Fe_laboratorio" name="Fe_laboratorio">
                                        </div>
                                         <label class="col-md-2"><strong>Estatus:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Estatus" name="Estatus">
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-2"><strong>Porcentaje avance financiero:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Porcentaje_financiero" name="Porcentaje_financiero">
                                        </div>
                                        <label class="col-md-2"><strong>Porcentaje avance Físico:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Porcentaje_fisico" name="Porcentaje_fisico">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="row" >
                                        <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light " id="btnEmpresa" name="btnFechas" onclick="fechas();"><span class="fa fa-clock-o"></span> Fechas de obra</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light  " id="btnEmpresa" name="btnFechas" onclick="bitacora();"><i class="text-primary fa fa-book"></i>  Bitacora</button>
                                        </div> 
                                         <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light  " id="btnEmpresa" name="btnEmpresa" onclick="fianzas();"><i class="text-success fa fa-money"></i>  Información de Fianzas</button>
                                        </div>                                                                              
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="row">

                                        <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnEmpresa" name="btnEmpresa" onclick="openPDF();"> <i class="text-danger fa fa-file-pdf-o"></i> Programa de obra  </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnEmpresa" name="btnEmpresa" onclick="Reporte();"><i class="text-warning fa fa-photo"></i> Reporte fotográfico</button>
                                        </div>
                                         <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnExpediente" name="btnExpediente" onclick="Expediente();"><i class="text-dark fa fa-archive"></i> Expediente Técnico</button>
                                        </div>                                       
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnEmpresa" name="btnEmpresa" onclick="Estimacion();"><i class="text-success fa fa-dollar"></i> Estimaciones</button>
                                        </div>
                                        <div class="col-md-1">
                                            
                                        </div>
                                         <div class="col-md-3">
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnHechos" name="btnHechos" onclick="hechos();"><i class="text-success fa fa-question"></i> Acciones realizadas</button>
                                        </div>                                       
                                        </div>
                                    </div>

                                <!--/div-->

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            require("../footer.php");
            ?>

        </div>

        <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Datos de la Empresa</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Nombre:</label>
                        <input type="text" class="form-control" id="Empresa2" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Procedencia:</label>
                        <input type="email" class="form-control" id="Procedencia" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Representante legal:</label>
                        <textarea class="form-control" id="Representante" placeholder="Sin datos"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Dirección:</label>
                        <textarea class="form-control" id="Direccion" placeholder="Sin datos"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Telefono:</label>
                        <textarea class="form-control" id="Telefono" placeholder="Sin datos"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Correo:</label>
                        <textarea class="form-control" id="Correo" placeholder="Sin datos"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Afiliado a la CMIC:</label>
                        <textarea class="form-control" id="CMIC" placeholder="Sin datos"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Tamaño de empresa:</label>
                        <textarea class="form-control" id="TamEmpresa" placeholder="Sin datos"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="modalHechos" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Acciones realizadas</h4>
               <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Acciones:</label>
                        <textarea type="text" class="form-control" id="Obs" placeholder="Sin datos"></textarea>

                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-info" onclick="VisitaAcc();">Visita a obra</button>
                    </div>
                    
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="modalBitacora" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Datos de bitácora electrónica</h4>
               <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Fecha de apertura:</label>
                        <input type="text" class="form-control" id="Fe_Aper_Bitacora" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Fecha de cierre:</label>
                        <input type="email" class="form-control" id="Fe_Cie_Bitacora" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Superintendente:</label>
                        <textarea class="form-control" id="Superintendente" placeholder="Sin datos"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFormFianzas" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Datos de Fianzas</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <label for="inputName"><strong>Fianza de cumplimiento</strong></label>
                    <div class="form-group">
                        <label for="inputName">Afianzadora:</label>
                        <input type="text" class="form-control" id="Afianzadora_cumplimiento" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Numero de fianza:</label>
                        <input type="email" class="form-control" id="numero_cumplimiento" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Fecha de entrega:</label>
                        <input type="email" class="form-control" id="Fe_cumplimiento" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Fecha de vérificación:</label>
                        <input type="email" class="form-control" id="Fe_veri_cumplimiento" placeholder="Sin datos"/>
                    </div>
                    <label for="inputName"><strong>Fianza de anticipo</strong></label>
                    <div class="form-group">
                        <label for="inputName">Afianzadora:</label>
                        <input type="text" class="form-control" id="Afianzadora_anticipo" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Numero de fianza:</label>
                        <input type="email" class="form-control" id="numero_anticipo" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Fecha de entrega:</label>
                        <input type="email" class="form-control" id="Fe_anticipo" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Fecha de vérificación:</label>
                        <input type="email" class="form-control" id="Fe_veri_anticipo" placeholder="Sin datos"/>
                    </div>
                    <label for="inputName"><strong>Fianza de vicios ocultos:</strong></label>
                    <div class="form-group">
                        <label for="inputName">Afianzadora:</label>
                        <input type="text" class="form-control" id="Afianzadora_vicios" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Numero de fianza:</label>
                        <input type="email" class="form-control" id="numero_vicios" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Fecha de entrega:</label>
                        <input type="email" class="form-control" id="Fe_vicios" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Fecha de vérificación:</label>
                        <input type="email" class="form-control" id="Fe_veri_vicios" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Vigencia de fianza:</label>
                        <input type="email" class="form-control" id="vigencia_vicios" placeholder="Sin datos"/>
                    </div>
                    
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFormFechas" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Fechas del contrato</h4>
            <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only ">Cerrar</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Fecha de inicio contractual:</label>
                        <input type="text" class="form-control" id="Fe_inicio_contrato" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Fecha de termino contractual:</label>
                        <input type="email" class="form-control" id="Fe_termino_contrato" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Fecha de inicio diferido:</label>
                        <input type="email" class="form-control" id="Fe_inicio_diferido" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Fecha de termino diferido:</label>
                        <input type="email" class="form-control" id="Fe_termino_diferido" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Motivo de diferimiento:</label>
                        <input type="text" class="form-control" id="Motivo_diferimiento" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Fecha de inicio real:</label>
                        <input type="email" class="form-control" id="Fe_inicio_real" placeholder="Sin datos"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Fecha de termino real:</label>
                        <input type="email" class="form-control" id="Fe_termino_real" placeholder="Sin datos"/>
                    </div>
                    
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
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
    <script src="funciones2.js"></script>
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
</body>

</html>