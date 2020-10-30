<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">UTILIDADES</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="calculadora.php">Calculadora</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="bodytech.php">BodyTech</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="springstep.php">Spring Step<a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="punto4.php">Postobon<a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="punto5.php">Bancolombia<a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
          <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-md-12">
                <div class="card">
                  <div class="row">
                    <div class="col-md-4">
                      <img class="card-img-top w-100 img-fluid" src="img/sucursal.jpg" alt="sucursal">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h4 class="text-info">Punto 5</h4>
                        <p class="card-text">5.Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita:</p>
                        <ul>
                          <li>Almacenar en variables información de nombre, teléfono, dirección y salario de 5 usuarios de una sucursal llamada sucursal A.</li>
                          <li>Sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000. </li>
                        </ul>
                        <p class="card-text">Permita que su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal A</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-12">
                <h4 class="text-success">SOLUCION PROPUESTA</h4>
                <h2 class="card-title text-info text-center">Sucursal A</h2>
                <div class="card">
            
                <div class="card-body text-center">
                    
                    <img class="card-img-top w-100 img-fluid col-md-6" src="img/bancolombia.png" alt="Bancolombia">
                    <form action="punto5.php" method="POST">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 1</h5>
                              <img class="card-img-top w-100 img-fluid" src="img/esteban.svg" alt="esteban">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreesteban" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionesteban" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoesteban" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioesteban" required>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 2</h5>
                              <img class="card-img-top w-100 img-fluid" src="img/andrea.svg" alt="andrea">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombreandrea" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionandrea" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoandrea" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioandrea" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 3</h5>
                              <img class="card-img-top w-100 img-fluid" src="img/magnolia.jpg" alt="magnolia">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombremagnolia" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionmagnolia" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonomagnolia" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salariomagnolia" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-around mt-4">
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                            <h5 class="text-white card-title">Usuario 4</h5>
                              <img class="card-img-top w-100 img-fluid" src="img/samuel.svg" alt="samuel">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombresamuel" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionsamuell" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonosamuel" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salariosamuel" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card bg-secondary">
                            <div class="card-body">
                              <h5 class="text-white card-title">Usuario 5</h5>
                              <img class="card-img-top w-100 img-fluid" src="img/alex.svg" alt="alex">
                              <input type="text" class="form-control mt-3" placeholder="Nombre Completo" name="nombrealex" required>
                              <input type="text" class="form-control mt-2" placeholder="Direccion" name="direccionalex" required>
                              <input type="text" class="form-control mt-2" placeholder="Telefono" name="telefonoalex" required>
                              <input type="number" class="form-control mt-2" placeholder="Salario" name="salarioalex" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary col-md-10 mt-4" name="btnEnviarDatos">Enviar datos</button>
                      
                      <div class="row mt-3 justify-content-center">
              <div class="col-md-12">
                <div class="card bg-secondary">
                  <div class="card-body">
                    <div class="row">
                      <?php if(isset($_POST["btnEnviarDatos"])): ?>
                        <?php 
                          $nombres = array($_POST["nombreesteban"],$_POST["nombreandrea"],$_POST["nombremagnolia"],$_POST["nombresamuel"],$_POST["nombrealex"]);
                          $direcciones = array($_POST["direccionesteban"],$_POST["direccionandrea"],$_POST["direccionmagnolia"],$_POST["direccionsamuel"],$_POST["direccionalex"]);
                          $telefonos = array($_POST["telefonoesteban"],$_POST["telefonoandrea"],$_POST["telefonomagnolia"],$_POST["telefonosamuel"],$_POST["telefonoalex"]);
                          $salarios = array($_POST["salarioesteban"],$_POST["salarioandrea"],$_POST["salariomagnolia"],$_POST["salariosamuel"],$_POST["salarioalex"]);
                          $sumatoriaSucursalB = 40000000;
                          $sumatoriaSucursalC = 32000000;
                          $sumatoriaSalarios =0;
                          $rutaSucursalA = "img/sucursalA.jpg";
                          $rutaSucursalB = "img/sucursalB.jpg";
                          $rutaSucursalC = "img/sucursalC.gif";
                          $rutaesteban ="img/esteban.svg";
                          $rutaandrea = "img/andrea.svg";
                          $rutamagnolia = "img/magnolia.jpg";
                          $rutasamuel = "img/samuel.svg";
                          $rutaalex = "img/alex.svg";
                          $imagenes = array($rutaesteban,$rutaandrea,$rutamagnolia,$rutasamuel,$rutaalex);

                          for($i=0;$i<sizeof($salarios);$i++){
                              $sumatoriaSalarios += $salarios[$i];
                          }

                        ?>
                        <div class="col-md-8">
                          <?php 
                            

                          if($sumatoriaSalarios > $sumatoriaSucursalB & $sumatoriaSalarios > $sumatoriaSucursalC){

                            $fotoPrimerLugar= $rutaSucursalA;
                            $salarioPrimerLugar = $sumatoriaSalarios;
                            $sucursalGanadora = "SUCURSAL A";

                            if($sumatoriaSucursalB > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalB;
                              $salarioSegundoLugar = $sumatoriaSucursalB;
                              $sucursalSegundoLugar = "SUCURSAL B";
                              $fotoTercerLugar = $rutaSucursalC;
                              $salarioTercerLugar = $sumatoriaSucursalC;
                              $sucursalTercerLugar = "SUCURSAL C";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalC;
                              $salarioSegundoLugar = $sumatoriaSucursalC;
                              $fotoTercerLugar = $rutaSucursalB;
                              $salarioTercerLugar = $sumatoriaSucursalB;
                            }
                          }
                          else if($sumatoriaSucursalB > $sumatoriaSalarios & $sumatoriaSucursalB > $sumatoriaSucursalC){
                            $fotoPrimerLugar= $rutaSucursalB;
                            $salarioPrimerLugar = $sumatoriaSucursalB;
                            $sucursalGanadora = "SUCURSAL B";

                            if($sumatoriaSalarios > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalA;
                              $salarioSegundoLugar = $sumatoriaSalarios;
                              $sucursalSegundoLugar = "SUCURSAL A";
                              $fotoTercerLugar = $rutaSucursalC;
                              $salarioTercerLugar = $sumatoriaSucursalC;
                              $sucursalTercerLugar = "SUCURSAL C";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalC;
                              $salarioSegundoLugar = $sumatoriaSucursalC;
                              $sucursalSegundoLugar = "SUCURSAL C";
                              $fotoTercerLugar = $rutaSucursalA;
                              $salarioTercerLugar = $sumatoriaSalarios;
                              $sucursalTercerLugar = "SUCURSAL A";
                            }
                          }
                          else{
                            $fotoPrimerLugar= $rutaSucursalC;
                            $salarioPrimerLugar = $sumatoriaSucursalC;
                            $sucursalGanadora = "SCURSAL C";

                            if($sumatoriaSucursalB > $sumatoriaSucursalC){
                              $fotoSegundoLugar = $rutaSucursalB;
                              $salarioSegundoLugar = $sumatoriaSucursalB;
                              $sucursalSegundoLugar = "SUCURSAL B";
                              $fotoTercerLugar = $rutaSucursalA;
                              $salarioTercerLugar = $sumatoriaSalarios;
                              $sucursalTercerLugar = "SUCURSAL A";
                            }
                            else{
                              $fotoSegundoLugar = $rutaSucursalA;
                              $salarioSegundoLugar = $sumatoriaSalarios;
                              $sucursalSegundoLugar = "SUCURSAL A";
                              $fotoTercerLugar = $rutaSucursalB;
                              $salarioTercerLugar = $sumatoriaSucursalB;
                              $sucursalTercerLugar = "SUCURSAL B";

                            }
                          }
                          
                          ?>
                          <?php if(true): ?>
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoPrimerLugar?> alt="Sucursal con mejor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-success" role="alert">
                                      <h5 class="text-succes"><?= $sucursalGanadora?> Ganadora!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioPrimerLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                            <div class="card mt-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoSegundoLugar?> alt="Sucursal con segundo mejor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-danger" role="alert">
                                      <h5 class="text-succes"><?= $sucursalSegundoLugar?> Segundo Lugar!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioSegundoLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                            <div class="card mt-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src=<?=$fotoTercerLugar?> alt="Sucursal con peor Salario" class="w-100 img-fluid">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="alert alert-danger" role="alert">
                                      <h5 class="text-succes"><?= $sucursalTercerLugar?> Tercer lugar!</h5>
                                      <P class="tex-info">La sumatoria de salarios es de <?=$salarioTercerLugar?></P>
                                    </div>
                                  </div>
                                </div>
                                <p></p>
                              </div>
                            </div>
                          <?php endif ?>
                        </div>
                        <div class="col-md-4">
                          <?php for($i=0; $i < sizeof($nombres); $i++): ?>
                            <div class="card mt-3">
                              <div class="card-body">
                                <img src=<?=$imagenes[$i]?> alt=<?=$nombres[$i]?> class="w-100 img-fluid">
                                <div class="alert alert-info mt-3" role="alert">
                                  <h5 class="text-center text-info"><strong>Usuario <?=$i+1 ?></strong></h5>
                                  <p class="mt-2">Nombre:  <strong><?=$nombres[$i] ?></strong></p>
                                  <p class="mt-2">Dirrecion:  <strong><?=$direcciones[$i] ?></strong></p>
                                  <p class="mt-2">Telefono:  <strong><?=$telefonos[$i] ?></strong></p>
                                  <p class="mt-2">Salario: $<strong><?=$salarios[$i] ?></strong></p>
                                </div>
                                
                              </div>
                            </div>
                          <?php endfor ?>
                          
                        </div>
                        
                      <?php endif ?>
                      <?php ?>

                    </div>
                  </div>
                </div>
              </div>      
            </div>
          </div>
        </main>
        <footer class="bg-dark text-white mt-5">
        <div class="contaner">
            <div class="row justify-content-around text-center ">
                <div class="col-md-3 mt-5">
                <img src="img/liseth.jpg" alt="Liseth Giraldo" class="img-fluid w-100 rounded-circle">
                        <p>Liseth Arelis Giraldo Morales©</p>
                        <p>Lisethgiraldo628@gmail.com</p>
                        <p>Rionegro - Colombia</p>
                    </div>
                    <div class="col-md-3 mt-5">
                        <img src="img/tatiana.jpg" alt="Tatiana Zapata" class="img-fluid w-100 rounded-circle">
                        <p>Luz Tatiana Zapata ©</p>
                        <p>tatianazz3@hotmail.com</p>
                        <p>Medellin - Antioquia</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="footer-copyright text-center py-3">© Colombia - 2020 Copyright:
                            <a
                                href=" https://www.intersoftware.org.co/">
                                Grupo Cerrado Intersoftware </a> <a href="https://www.cesde.edu.co/Paginas/tecnicos/procesos-tecnologicos-e-industriales/desarrollo-de-software-virtual.aspx"> - CESDE  </a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>