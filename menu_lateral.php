<?php
 require('config/url.php');
?>
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_inicio/dashboard.php" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_listado_obras/" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Listado Obras</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_residentes/" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Residentes</span></a>
                        </li>
                          <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_empresas/" aria-expanded="false"><i class="fa fa-bank"></i><span class="hide-menu">Empresas</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_laboratorios/" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Laboratorios</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_reporte/" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Mapa</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_presentacion/" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Reporte</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_cmic/" aria-expanded="false"><i class="fa fa-hospital-o"></i><span class="hide-menu">CMIC</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo $IP."".$CARPETA?>modulo_apoyos/" aria-expanded="false"><i class="fa fa-hospital-o"></i><span class="hide-menu">Apoyos</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="../cerrarsesion.php" aria-expanded="false"><i class="fa fa-power-off"></i><span class="hide-menu">Cerrar sesión</span></a>
                        </li>
                    </ul>
                    <!--div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn-info hidden-md-down"> Upgrade to Pro</a>
                    </div-->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->