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
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="foto.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Bootstrap
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Inicio de Sesion</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Registro.php">Registro</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>
        <section>
            <div class="container">
                <form class="my-5" action="ValidarRegistro.php" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Cedula</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Direccion</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Ciudad</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Barrio</label>
                        <input type="text" class="form-control" id="inputCity" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </section>
        <?php
        // put your code here
        ?>
        <footer>
            <div class="container-fluid bg-footer">
                <h2>VETERINARIA AAAA 2018 &COPY; Todos Los Derechos Reservados</h2>
            </div>

        </footer>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
