<!DOCTYPE html>
<html>
<head>
    <title>Recursos Humanos</title>
        <link rel="shortcut icon" href="img/upea.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>
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
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Registrar Código
                    </a>
                </li>
            </ul>
        </div>
    </section>
<!-- Content page-->
    <section class="full-box dashboard-contentPage" >
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-titles text-center"> Eliminar Registro </h1>
    <div ID_Participante="wrapper">

        <p>Esta seguro que quiere eliminar este registro permanentemente de la base de datos?</p>
        <form action="eliminar.php" method="post">
            <input class="btn-danger" type="submit" name="eliminar" value="Eliminar" />
            <input type="hidden" name="sw" value="1" />
            <?php if(isset($_GET['ID_Participante'])): ?>
                <input type="hidden" name="ID_Participante" value="<?php echo $_GET['ID_Participante']; ?>" />
            <?php endif; ?>
        </form><br />
        <a class="btn" href="listregis.php"><< Volver</a>
    </div>
    <?php 
 
//conexion a bbdd
$link = mysqli_connect('localhost', 'root', '', 'rrhh');
 
//si el formulario fue enviado
if(isset($_POST['sw']) == 1){
 
    //cadena con la consulta de eliminacion segun el id de usuario
    $query = "DELETE FROM registro_cursos WHERE ID_Participante =".$_POST['ID_Participante']; 
 
    if(mysqli_query($link, $query)){ //si la consulta devuelve un resultado
        header("Location:listregis.php"); //redirecciono ap
    }else{ //si hubo un error
        echo "Ocurrio un error al intentar eliminar el registro"; 
    }
}
 
//cierro conexion a bbdd
mysqli_close($link);
?>
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
    <script>
        $.material.init();
    </script>
</body>
</html>
