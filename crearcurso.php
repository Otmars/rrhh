<!doctype html>
<html lang="en">

<head>
    <title>Curveado</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="navigation">
                    <ul>
                        <li class="list">
                            <a href="admin2.php">
                                <span class="icon">
                                    <ion-icon name="apps"></ion-icon>
                                </span>
                                <span class="title">Bienvenido</span>
                            </a>
                        </li>
                        <li class="list active">
                            <a href="crearcurso.php">
                                <span class="icon">
                                    <ion-icon name="arrow-dropright"></ion-icon>
                                </span>
                                <span class="title">Crear curso o seminario</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="crearevento.php">
                                <span class="icon">
                                    <ion-icon name="arrow-dropright"></ion-icon>
                                </span>
                                <span class="title">Crear Evento</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="listparticipantes.php">
                                <span class="icon">
                                    <ion-icon name="arrow-dropright"></ion-icon>
                                </span>
                                <span class="title">Lista de Participantes</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="index.php">
                                <span class="icon">
                                    <ion-icon name="log-out"></ion-icon>
                                </span>
                                <span class="title">Salir</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container my-5 bg-light p-4">
                    <div class="row mx-auto">
                        <div class="col-md-12">
                            <h1 class="text-primary">Cursos o Seminarios</h1>
                            <form action="Backend/subir.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="my-input">Seleccione una Imagen</label>
                                    <input id="my-input" type="file" name="Imagen">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Titulo</label>
                                    <input id="my-input" class="form-control" type="text" name="Titulo">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Descripcion</label>
                                    <textarea id="my-input" class="form-control" name="Descripcion" rows="7"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Fecha de Inicio</label>
                                    <input id="my-input" class="form-control" type="date" name="Fecha_Inicio">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Fecha Final</label>
                                    <input id="my-input" class="form-control" type="date" name="Fecha_Final">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Costo - Bs</label>
                                    <input id="my-input" class="form-control" type="number" name="Costo">
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
                                <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
                            </form>
                            <div>
                                <form action="listCursos.php">
                                    <center><input type="submit" value="listaCursos" class="btn btn-primary" name="Lista"></center>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        let list = document.querySelectorAll('.list');
        for (let i = 0; i < list.length; i++) {
            list[i].onclick = function() {
                let j = 0;
                console.log(j);
                while (j < list.length) {
                    list[j++].className = 'list';
                    console.log(j);
                }

                list[i].className = 'list active';
            }
        }
        // document.write(list)
    </script>
</body>

</html>