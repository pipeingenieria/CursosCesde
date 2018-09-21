<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light barra-nav">
                <a class="navbar-brand" href="#">
                  <img src="img/foto.png" width="30" height="30" class="d-inline-block align-top" alt="">
                  Bootstrap
                </a>
            </nav>
        </header>
        <section>
            <div class="container registro">
                <div class="img-form">
                    <img class="img-responsive imagen-form" src="img/foto2.png" alt="" width="120" height="120">
                </div>
                <form class="my-5">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Ingrese nombre">
                                <small id="nombreHelp" class="form-text text-muted">No compartiremos sus datos con otras personas.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="pais">Pais</label>
                                <select class="form-control" id="pais" name="pais">
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
                                <select class="form-control" id="ciudad" name="ciudad">
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
                                <input type="text" name="telefono" class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="Ingrese Telefono">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="terminos" class="form-check-input" id="terminos">
                        <label class="form-check-label" for="exampleCheck1">Acepta Terminos y condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary submit">Completar registro</button>
                    <button type="reset" class="btn btn-primary">Vaciar Campos</button>
                </form>
            </div>
        </section>

        <footer>
            <div class="container-fluid bg-footer">
                <h2>&COPY; ANDRES FELIPE HERNANDEZ -- Derechos de Autor</h2>
            </div>

        </footer>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>