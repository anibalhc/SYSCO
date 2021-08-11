<?php
session_start();

if(empty($_SESSION['admin'])){
  echo '<script> window.location="index.php"; </script>';
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
    <title>SCT</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
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
                    <a class="navbar-brand" href=""><!--index.php-->
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                        <!-- dark Logo text -->
                        <img src="../assets/images/SCT_logo_med.png" class="dark-logo"> 
                    </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link  waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/2021.png" alt="user" class="" /> <span class="hidden-md-down"><?php echo $_SESSION['admin'] ?> &nbsp;</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        require("../menu_lateral.php")
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
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Semáforo</h3>
                    </div>
                    
                </div>

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="card" onclick="verde();">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0" id="NumVerde" name="NumVerde"><div id="testVerde"></div></h2>
                                        <h6 class="text-muted m-b-0">Verde</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-success fa  fa-circle fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">100% Complete</span></div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-3 col-md-6">
                        <div class="card" onclick="amarillo();">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0"><div id="testAmarillo"></div></h2>
                                        <h6 class="text-muted m-b-0">Amarillo</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-warning fa  fa-circle fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">100% Complete</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card" onclick="rojo();">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0"><div id="testRojo"></div></h2>
                                        <h6 class="text-muted m-b-0">Rojo</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-danger fa  fa-circle fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">100% Complete</span></div>
                            </div>
                        </div>
                    </div>

                    <!--div class="col-lg-3 col-md-6">
                        <button type="button" onclick="countSemaforo();" style="width: 100%;" class="btn btn-info">Actualizar semaforo</button>
                    </div-->

                </div>

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard 2020</h3>
                        <!--ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol-->
                    </div>
                    <!--div class="col-md-7 align-self-center">
                        <a href="" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Ver datos</a>
                    </div-->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->

                <div class="row">
                 <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">46</h2>
                                        <h6 class="text-muted m-b-0">Total de Obras</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-info fa fa-folder-open fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">100% Complete</span></div>
                            </div>
                        </div>
                    </div>                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">10</h2>
                                        <h6 class="text-muted m-b-0">Obras en Ejecución</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-success fa fa-truck fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>                	
                    <!-- Column -->
                     <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">36</h2>
                                        <h6 class="text-muted m-b-0">Obras Finalizadas</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-danger fa fa-hdd-o fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">0</h2>
                                        <h6 class="text-muted m-b-0">Obras Suspendidas</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-warning fa fa-times-rectangle-o"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard 2021</h3>
                        <!--ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol-->
                    </div>
                    <!--div class="col-md-7 align-self-center">
                        <a href="" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Ver datos</a>
                    </div-->
                </div>
                <div class="row">
                 <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">82</h2>
                                        <h6 class="text-muted m-b-0">Total de Obras</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-info fa fa-folder-open fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:3px;"> <span class="sr-only">100% Complete</span></div>
                            </div>
                        </div>
                    </div>                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">78</h2>
                                        <h6 class="text-muted m-b-0">Obras en Ejecución</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-success fa fa-truck fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>                  
                    <!-- Column -->
                     <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">4</h2>
                                        <h6 class="text-muted m-b-0">Obras Finalizadas</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-danger fa fa-hdd-o fa-lg"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">0</h2>
                                        <h6 class="text-muted m-b-0">Obras Suspendidas</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-warning fa fa-times-rectangle-o"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div> 
                                                        
                </div>

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard General</h3>
                        <!--ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol-->
                    </div>
                    <!--div class="col-md-7 align-self-center">
                        <a href="" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Ver datos</a>
                    </div-->
                </div>

                <div class="row">
                    
                     <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">0</h2>
                                        <h6 class="text-muted m-b-0">Obras con Rescisión</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-secondary fa fa-clock-o"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>                                      
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-20 no-block">
                                    <div class="align-slef-center">
                                        <h2 class="m-b-0">0</h2>
                                        <h6 class="text-muted m-b-0">Obras en Juicio</h6>
                                    </div>
                                    <div class="align-self-center display-6 ml-auto"><i class="text-primary fa fa-legal"></i></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:3px;"> <span class="sr-only">50% Complete</span></div>
                            </div>
                        </div>
                    </div>  
                </div>
                
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
    <!-- Bootstrap popper Core JavaScript -->
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <!--script src="js/dashboard1.js"></script-->
</body>

</html>