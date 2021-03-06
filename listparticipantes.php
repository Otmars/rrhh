<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Recursos Humanos</title>
    <link rel="shortcut icon" href="img/upea.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/b-2.1.1/b-html5-2.1.1/datatables.min.css" />
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
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
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Registrar C??digo
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
                <h1 class="text-titles text-center"> Registrar C??digo </h1>
                <center>
                    <form action="reporte2_excel.php">
                        <button class="btn btn-info btn-raised btn-sm"> Reporte Excel</button>
                    </form>
                    <form action="reporte2_word.php">
                        <button class="btn btn-info btn-raised btn-sm">Reporte Word</button>
                    </form>
                </center>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
                            <li><a href="#list" data-toggle="tab">Lista</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="new">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-10 col-md-offset-1">
                                            <form action="Backend/subir4.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nombre(s)</label>
                                                    <input class="form-control" type="text" name="Nombres">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Apellidos</label>
                                                    <input class="form-control" type="text" name="Apellidos">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">C??digo de Certificado</label>
                                                    <input class="form-control" type="text" name="cod_qr">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Carnet de Identidad</label>
                                                    <input class="form-control" type="number" name="CI">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fecha</label>
                                                    <input class="form-control" type="date" name="fecha">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Organizado Por</label>
                                                    <input class="form-control" type="text" name="org">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Certificado De</label>
                                                    <input class="form-control" type="text" name="certde">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Documento de Certificado</label>
                                                    <div>
                                                        <input type="text" readonly="" class="form-control" placeholder="Documento">
                                                        <input type="file" name="Doc">
                                                    </div>
                                                </div>
                                                <?php if (isset($_SESSION['mensaje'])) { ?>
                                                    <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                                                        <strong><?php echo $_SESSION['mensaje']; ?></strong>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <?php session_unset();
                                                } ?>
                                                <p class="text-center">
                                                    <button value="Guardar2" type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list">
                                <div class="table-responsive">
                                    <table id="tabla" class="table table-striped">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nombres</th>
                                                <th class="text-center">Apellidos</th>
                                                <th class="text-center">C??digo de Certificado</th>
                                                <th class="text-center">Carnet de Identidad</th>
                                                <th class="text-center">Fcha de Evento</th>
                                                <th class="text-center">Organizado por:</th>
                                                <th class="text-center">Certificado de:</th>
                                                <th class="text-center">Documento</th>
                                                <th class="text-center">Editar</th>
                                                <th class="text-center">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once "db.php";

                                            $query = "SELECT * FROM `validar_cert`";
                                            $res = mysqli_query($conexion, $query);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['ID_Validar']; ?></td>
                                                    <td><?php echo $row['Nombres']; ?></td>
                                                    <td><?php echo $row['Apellidos']; ?></td>
                                                    <td><?php echo $row['cod_qr']; ?></td>
                                                    <td><?php echo $row['CI']; ?></td>
                                                    <td><?php echo $row['fecha']; ?></td>
                                                    <td><?php echo $row['org']; ?></td>
                                                    <td><?php echo $row['certde']; ?></td>
                                                    <td><?php echo $row['Doc']; ?></td>
                                                    <td><a class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                                    <td><a href="Backend/delete4.php?id=<?php echo $row['ID_Validar'] ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script>
        $.material.init();
    </script>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

</html>