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
                        <h3 class="text-themecolor">Expediente Técnico de Obra</h3>
                        <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a>Detalles de obra</a></li-->
                      
                        </ol>
                    </div>
                    <!--div class="col-md-7 align-self-center">
                        <a href="../modulo_listado_obras/detalles.php" class="btn waves-effect waves-light btn btn-danger pull-right"><i class="text-light fa fa-toggle-left"></i> Regresar</a>
                    </div-->                   
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


                                 <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#demo">Planeación</button>
                                      <hr>
                                    <div id="demo" class="collapse">
                                        <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                              <label class="form-check-label" for="flexCheckDefault">
                                              <strong>  Factibilidad del proyecto por la Dependencia Normativa.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbValidacion">
                                              <label class="form-check-label" for="CbValidacion">
                                              <strong>  Validación del proyecto por la Dependencia Normativa.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbEstudio">
                                              <label class="form-check-label" for="CbEstudio">
                                              <strong>  Estudio socioeconómico (aplica al FAIS). </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbManifestacion">
                                              <label class="form-check-label" for="CbManifestacion">
                                              <strong>  Manifestación del impacto ambiental (según sea el caso). </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbResolutivo">
                                              <label class="form-check-label" for="CbResolutivo">
                                              <strong>  Resolutivo en materia de impacto ambiental emitido por la Instancia competente (según sea el caso). </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPermisos">
                                              <label class="form-check-label" for="CbPermisos">
                                              <strong>  Permisos, licencias, títulos de concesión, afectaciones (según sea el caso). </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbAcreditacion">
                                              <label class="form-check-label" for="CbAcreditacion">
                                              <strong>  Acreditación de la propiedad del predio</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbProyecto">
                                              <label class="form-check-label" for="CbProyecto">
                                              <strong>  Proyecto ejecutivo y/o planos actualizados.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbCatalogo">
                                              <label class="form-check-label" for="CbCatalogo">
                                              <strong>  Catalogo de conceptos.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbCatalogo">
                                              <label class="form-check-label" for="CbCatalogo">
                                              <strong>  Números generadores de volúmenes de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbGenerales">
                                              <label class="form-check-label" for="CbGenerales">
                                              <strong>  Especificaciones generales.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbParticipacion">
                                              <label class="form-check-label" for="CbParticipacion">
                                              <strong>  Especificaciones particulares.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPresupuesto">
                                              <label class="form-check-label" for="CbPresupuesto">
                                              <strong>  Presupuesto base.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbAnalisis">
                                              <label class="form-check-label" for="CbAnalisis">
                                              <strong>  Análisis de precios unitarios del presupuesto base.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbExplosion">
                                              <label class="form-check-label" for="CbExplosion">
                                              <strong>  Explosión de insumos del presupuesto base.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPrograma">
                                              <label class="form-check-label" for="CbPrograma">
                                              <strong>  Programa de ejecución de obra del presupuesto base.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbProgramaMateriales">
                                              <label class="form-check-label" for="CbProgramaMateriales">
                                              <strong>  Programa de suministro de materiales, mano de obra, maquinaria y/o equipo complementario de obra del presupuesto base.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPadron">
                                              <label class="form-check-label" for="CbPadron">
                                              <strong>  Padrón de beneficiarios (según sea el caso).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#Modalidad">Modalidad de contrato</button>
                            <hr>
                            <div id="Modalidad" class="collapse">

                            <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <label>ADJUDICACIÓN DIRECTA</label>
                                            <br>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbDictamen">
                                              <label class="form-check-label" for="CbDictamen">
                                              <strong>  Dictamen de excepción a la licitación.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbAnalisis">
                                              <label class="form-check-label" for="CbAnalisis">
                                              <strong>  Análisis de la propuesta (cuadro comparativo).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbActa">
                                              <label class="form-check-label" for="CbActa">
                                              <strong>  Acta de adjudicación.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPadron">
                                              <label class="form-check-label" for="CbPadron">
                                              <strong>  Registro en el padrón de contratistas de SEFIPLAN.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbIMSS">
                                              <label class="form-check-label" for="CbIMSS">
                                              <strong>  Registro de la obra ante el IMSS. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <label>INVITACIÓN A CUANDO MENOS TRES CONTRATISTAS / LICITACIÓN PÚBLICA</label>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbInvitacion">
                                              <label class="form-check-label" for="CbInvitacion">
                                              <strong>  Invitación por escrito o resumen de convocatoria. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbConvocatoria">
                                              <label class="form-check-label" for="CbConvocatoria">
                                              <strong>  Convocatoria (bases de concurso).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPresentacion">
                                              <label class="form-check-label" for="CbPresentacion">
                                              <strong>  Acta de presentación y apertura de propuestas (técnica y económica).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbComparativo">
                                              <label class="form-check-label" for="CbComparativo">
                                              <strong>  Análisis de las propuestas (cuadro comparativo).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPreConcursantes">
                                              <label class="form-check-label" for="CbPreConcursantes">
                                              <strong>  Presupuestos de las propuestas concursantes.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbDicTecnico">
                                              <label class="form-check-label" for="CbDicTecnico">
                                              <strong>  Dictamen técnico de evaluación.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbFallo">
                                              <label class="form-check-label" for="CbFallo">
                                              <strong>  Acta de adjudicación o fallo.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbActaVisita">
                                              <label class="form-check-label" for="CbActaVisita">
                                              <strong>  Acta de Visita de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbJunta">
                                              <label class="form-check-label" for="CbJunta">
                                              <strong>  Junta de aclaraciones.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbSefiplan">
                                              <label class="form-check-label" for="CbSefiplan">
                                              <strong>  Registro en el padrón de contratistas de SEFIPLAN.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbRegImss">
                                              <label class="form-check-label" for="CbRegImss">
                                              <strong>  Registro de la obra ante el IMSS</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#Contratacion">Contratacion</button>
                            <hr>
                            <div id="Contratacion" class="collapse">

                            <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <br>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbContrato">
                                              <label class="form-check-label" for="CbContrato">
                                              <strong>  Contrato de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPreContratado">
                                              <label class="form-check-label" for="CbPreContratado">
                                              <strong>  Presupuesto contratado.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPrecios">
                                              <label class="form-check-label" for="CbPrecios">
                                              <strong>  Análisis de precios unitarios del presupuesto contratado.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbSobrecosto">
                                              <label class="form-check-label" for="CbSobrecosto">
                                              <strong>  Análisis del factor de sobrecosto del presupuesto contratado.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbProgramaEjecucion">
                                              <label class="form-check-label" for="CbProgramaEjecucion">
                                              <strong>  Programa de ejecución de obra del presupuesto contratado. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbSuministro">
                                              <label class="form-check-label" for="CbSuministro">
                                              <strong>  Programa de suministro de materiales, mano de obra, maquinaria y/o equipo complementario del presupuesto contratado. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbAnticipo">
                                              <label class="form-check-label" for="CbAnticipo">
                                              <strong> Fianza de anticipo.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbCumplimiento">
                                              <label class="form-check-label" for="CbCumplimiento">
                                              <strong>  Fianza de Cumplimiento.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbComparativo">
                                              <label class="form-check-label" for="CbComparativo">
                                              <strong>  Análisis de las propuestas (cuadro comparativo).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbPreConcursantes">
                                              <label class="form-check-label" for="CbPreConcursantes">
                                              <strong>  Presupuestos de las propuestas concursantes.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbDicTecnico">
                                              <label class="form-check-label" for="CbDicTecnico">
                                              <strong>  Dictamen técnico de evaluación.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbFallo">
                                              <label class="form-check-label" for="CbFallo">
                                              <strong>  Acta de adjudicación o fallo.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbActaVisita">
                                              <label class="form-check-label" for="CbActaVisita">
                                              <strong>  Acta de Visita de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbJunta">
                                              <label class="form-check-label" for="CbJunta">
                                              <strong>  Junta de aclaraciones.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbSefiplan">
                                              <label class="form-check-label" for="CbSefiplan">
                                              <strong>  Registro en el padrón de contratistas de SEFIPLAN.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbRegImss">
                                              <label class="form-check-label" for="CbRegImss">
                                              <strong>  Registro de la obra ante el IMSS</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                             <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#Admin">Administracion Directa</button>
                            <hr>
                            <div id="Admin" class="collapse">

                            <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <br>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbAcuerdo">
                                              <label class="form-check-label" for="CbAcuerdo">
                                              <strong>  Acuerdo de ejecución</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbProFinal">
                                              <label class="form-check-label" for="CbProFinal">
                                              <strong> Presupuesto de obra final.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="CbExplosion">
                                              <label class="form-check-label" for="CbExplosion">
                                              <strong>  Explosión de insumos final.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        </div>                                    
                                </form>
                            </div>

 
<!--inicio-->
                              <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#ejecucion">Ejecución</button>
                              <hr>
                              <div id="ejecucion" class="collapse">

                              <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_bitacora_de_obra_tradicional_electronica">
                                              <label class="form-check-label" for="cb_bitacora_de_obra_tradicional_electronica">
                                              <strong>Bitácora de obra tradicional o electrónica (según sea el caso)</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_estimaciones_de_obra">
                                              <label class="form-check-label" for="cb_estimaciones_de_obra">
                                              <strong>Estimaciones de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_opias_recibo_aportaciones_comunitarias">
                                              <label class="form-check-label" for="cb_opias_recibo_aportaciones_comunitarias">
                                              <strong> Copias de recibo de las aportaciones comunitarias </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_fotocopia_polizas_cheque">
                                              <label class="form-check-label" for="cb_fotocopia_polizas_cheque">
                                              <strong>  Fotocopia de las pólizas cheque con su respectiva factura del pago de estimaciones.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_numeros_generadores_volumenes_obra">
                                              <label class="form-check-label" for="cb_numeros_generadores_volumenes_obra">
                                              <strong> Números generadores de volúmenes de obra ejecutada. ( que incluyan croquis de localización) </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_convenios_modificatorios">
                                              <label class="form-check-label" for="cb_convenios_modificatorios">
                                              <strong>  Convenios modificatorios (con  su soporte correspondiente) </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_pruebas_laboratorio">
                                              <label class="form-check-label" for="cb_pruebas_laboratorio">
                                              <strong>  Pruebas de laboratorio (según sea el caso).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_reporte_fotografico">
                                              <label class="form-check-label" for="cb_reporte_fotografico">
                                              <strong> Reporte fotográfico.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_sancion_incumplimiento_contrato">
                                              <label class="form-check-label" for="cb_sancion_incumplimiento_contrato">
                                              <strong>  Sanción por incumplimiento al contrato y/o al programa de obra.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>                                      
                                    </div>
                                </form>
                            </div>
                            <!--fin-->

                            <!--inicio-->
                              <button class="btn btn-info" style="width: 35%;" data-toggle="collapse" data-target="#terminacion">Terminación</button>
                              <hr>
                              <div id="terminacion" class="collapse">

                              <form class="form-horizontal form-material">
                                        <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_55">
                                              <label class="form-check-label" for="cb_55">
                                              <strong>  Fianza de Vicios Ocultos (solo para obras por contrato).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_56">
                                              <label class="form-check-label" for="cb_56">
                                              <strong>Acta de entrega recepción del contratista al Ente Ejecutor.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_57">
                                              <label class="form-check-label" for="cb_57">
                                              <strong> Finiquito de obra. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_58">
                                              <label class="form-check-label" for="cb_58">
                                              <strong>  Aviso de terminación de los trabajos del contratista al Ente Ejecutor. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_59">
                                              <label class="form-check-label" for="cb_59">
                                              <strong>  Constancia de verificación de los trabajos concluidos por parte del Ente Ejecutor. </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_60">
                                              <label class="form-check-label" for="cb_60">
                                              <strong>  Acta de entrega recepción del Ente Ejecutor al Comité de Contraloría Social (según sea el caso). </strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_61">
                                              <label class="form-check-label" for="cb_61">
                                              <strong>  Acta de entrega recepción a la Dependencia Normativa (según sea el caso).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_62">
                                              <label class="form-check-label" for="cb_62">
                                              <strong>  Acta de entrega-recepción a quien la va a operar (según sea el caso).</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="cb_63">
                                              <label class="form-check-label" for="cb_63">
                                              <strong>  Planos actualizados de obra terminada.</strong>
                                              </label>
                                            </div>
                                        </div>
                                        </div>                                      
                                    </div>
                                </form>
                            </div>
                            <!--fin-->                             
                 


 

                            <!--fin-->

                                <!--form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-md-2"><strong>Número de Licitación:</strong></label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Sin datos" class="form-control form-control-line" id="Licitacion" name="Licitacion">
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
                                            <input type="text" placeholder="12/12/2020" class="form-control form-control-line" id="FeSiac" name="FeSiac">
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
                                            <button type="button" style="width: 100%;" class="btn btn-light" id="btnExpediente" name="btnExpediente" onclick="Expediente();"><i class="text-warning fa fa-photo"></i>Expediente Técnico</button>
                                        </div>                                       
                                        </div>
                                    </div>


                                </form-->
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