<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema De Gestion Veterinaria</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/estilos2.css">
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
        <section>
            <div class="container registro">
                <div class="container-fluid img-form">
                    <img class="img-responsive imagen-form" src="img/foto2.png" alt="" width="120" height="120">
                </div>
                <form class="my-5" action="InsertaRegistro.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre" required>
                                <small id="nombreHelp" class="form-text text-muted">No compartiremos sus datos con otras personas.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="password" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="pais">Pais</label>
                                <select class="form-control" id="pais" name="pais" required>
                                    <option value="Colombia">Colombia</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Brasil">Brasil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="departamento">Departamento</label>
                                <select class="form-control" id="departamento" name="departamento">
                                  <option value="Antioquia">Antioquia</option>
                                  <option value="Cundinamarca">Cundinamarca</option>
                                  <option value="Nariño">Nariño</option>
                                  <option value="Amazonas">Amazonas</option>
                                  <option value="Atlantico">Atlantico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <select class="form-control" id="ciudad" name="ciudad" required>
                                  <option value="Medellin">Medellin</option>
                                  <option value="Barbosa">Barbosa</option>
                                  <option value="Copacabana">Copacabana</option>
                                  <option value="Envigado">Envigado</option>
                                  <option value="Sabaneta">Sabaneta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="Ingrese Telefono" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="terminos" class="form-check-input" id="terminos" required>
                        <label class="form-check-label" for="exampleCheck1">Acepta Terminos y condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary submit">Completar registro</button>
                    <button type="reset" class="btn btn-primary">Vaciar Campos</button>
                </form>
            </div>
        </section>
        <?php
        // put your code here
        ?>
        <footer>
            <div class="container-fluid navbar-footer">
                <h2>&COPY; PETS WORLD -- Todos Los Derechos Reservados</h2>
            </div>

        </footer>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>


