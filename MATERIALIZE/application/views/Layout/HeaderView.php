<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MATERIALIZE</title>
        <!--Import materialize.css-->
       <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css"  media="screen,projection"/>
        
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilos2.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilo.css">
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/validacion.js">
        
    </head>
    <script>
            $(document).ready(function() {
                $('input-field col s12').material_select();
              });
    </script>
     <body>
        <!-- Modal -->
            
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header navbar-footer">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Registro de Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container-fluid img-form">
                            <img class="img-responsive imagen-form" src="<?php echo base_url();?>/assets/img/foto2.png" alt="" width="100" height="100">
                        </div>
                    <form class="my-5" name="registro" action="InsertaRegistro.php" method="POST">
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
                                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
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
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="terminos" class="form-check-input" id="terminos" required>
                            <label class="form-check-label" for="exampleCheck1">Acepta Terminos y condiciones</label>
                        </div>
                        <footer>             
                               <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary ">Completar registro</button>
                                   <button type="reset" class="btn btn-primary">Borrar</button>
                                   <button type="" data-dismiss="modal" class="btn btn-primary" value="cancelar" >Cancelar</button>
                                </div>
                        </footer>
                     </form>       
                   </div>                
                </div>
              </div>
            </div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-footer">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url();?>/assets/img/logo.jpg" width="30" height="30" alt="">   
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">M</span>
                </button>              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         <li class="nav-item">
                            <a class="nav-link" href="inicio">Pets World</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto">¿Quienes Somos ?</a>
                        </li>                  
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 " style="width:110px;" type="search" placeholder="Usuario">
                        <input class="form-control mr-sm-2" style="width:110px;" type="search" placeholder="Contraseña">
                        <a class="btn btn-primary my-2 my-sm-0 bg-ligthblue" href="#">Login</a>
                        <a class="btn btn btn-success my-2 my-sm-0 bg-ligthblue" id="registro" href="index.php" data-toggle="modal" data-target="#exampleModalCenter">Registro</a>
                    </form>
                </div>
            </nav>
        </header>