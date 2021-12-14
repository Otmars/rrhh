<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recursos Humanos</title>
    <link rel="shortcut icon" href="img/upea.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title ">
                RECURSOS HUMANOS<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <img src="img/upea.png" alt="UserIcon">
                    <figcaption class="text-center text-titles">Administrador</figcaption>
                </figure>
                <ul class="full-box list-unstyled text-center">
                    <li>
                        <a href="#!">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="btn-exit-system">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="admin.php">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="listEventos.php">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Eventos
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Cursos <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="listregis.php"> Inscritos</a>
                        </li>
                        <li>
                            <a href="listCursos.php"> Lista de Cursos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="listparticipantes.php">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>  Registrar Código
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-titles text-center">SISTEMA <small></small></h1>
            </div>
        
            <div class="py-5 cover text-center text-white section-dark">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 mt-5" >
                      <img src="img/RRHH+UPEA.png" width="50%" height="30%">
                      <b>
                      <h1 class="display-2 d-none d-md-block text-white">RECURSOS HUMANOS</h1>
                      <h3 > UNIVERSIDAD PUBLICA DE EL ALTO</h3>
                      </b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--====== Scripts -->
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        $.material.init();
    </script>


</body>
</html>