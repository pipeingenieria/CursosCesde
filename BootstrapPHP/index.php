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
        <title>PETS WORLD</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos2.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
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
                            <img class="img-responsive imagen-form" src="img/foto2.png" alt="" width="100" height="100">
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
        </section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-footer">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.jpg" width="30" height="30" alt="">   
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         <li class="nav-item">
                            <a class="nav-link" href="index.php">Pets World</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuienesSomos.php">¿Quienes Somos ?</a>
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
      <section>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">CONTENIDO</h1>
          <div class="list-group">
            <select class="form-control form-control-lg">
                  <option>Promociones</option>
                  <option>Promocion 1</option>
                  <option>Promocion 2</option>
                  <option>Promocion 3</option>
            </select>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/foto2.jpg" alt="First slide" width="900" height="200">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="img/foto4.jpg" alt="Second slide" width="900" height="200">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="img/foto5.jpg" alt="Third slide" width="900" height="200">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Primer Item</a>
                  </h4>
                  <h5>$24.900</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto3.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Segundo Item</a>
                  </h4>
                  <h5>$28.990</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Tercer Item</a>
                  </h4>
                  <h5>$24.909</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto7.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Cuarto Item</a>
                  </h4>
                  <h5>$24.009</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto8.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Quimto Item</a>
                  </h4>
                  <h5>$27.090</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/foto9.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Sexto Item</a>
                  </h4>
                  <h5>$25.000</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
        </section>

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