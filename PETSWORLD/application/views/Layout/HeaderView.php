<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PETS WORLD</title>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilos2.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilo.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-footer">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.jpg" width="30" height="30" alt="">
                    Veterinaria
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="Index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Mision</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Vision</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" style="width:110px;" type="search" placeholder="Usuario">
                        <input class="form-control mr-sm-2" style="width:110px;" type="search" placeholder="Contraseña">
                        <a class="btn btn-outline-success my-2 my-sm-0 bg-ligthblue" href="#">Login</a>
                        <a class="btn btn-outline-success my-2 my-sm-0 bg-ligthblue" href="Registro.php">Registro</a>
                    </form>
                </div>
            </nav>
        </header>