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
            <div class="row mt-5 justify-content-center">
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top w-100 img-fluid" src="img/cuentas.jpg" alt="cuentas">
                  <div class="card-body">
                    <h5 class="card-text text-info text-center">Punto 4</h5>
                    <p class="card-text">4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.</p>
                  </div>
                </div>     
              </div>
              <div class="col-md-8">
                  <div class="card text-center">
                      <div class="card-body">
                        <h4 class="text-info">Salario a recibir</h4>
                        <img class="card-img-top w-100 img-fluid col-md-6" src="img/Ingresos.png" alt="salario">
                        <form action="punto4.php" method="POST">
                          <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                              <input type="number" class="form-control" placeholder="Ingresa las horas trabajadas" name="cantidadHoras">
                            </div>
                            
                            
                          </div>
                          <div class="row justify-content-center mt-2">
                            <div class="col-md-10">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100" name="btnCalcular">Calcular Salario</button>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <div class="col-md-8">
                              <?php 
                                calcularSalario();

                                function calcularSalario(){
                                  if(isset($_POST["btnCalcular"])){
                                    $horas = $_POST["cantidadHoras"];
                                    
                                    
                                    if(!empty($horas)){
                                      if($horas <=40){
                                        $resultado = $horas *20000;
                                        echo ("<div class=\"card text-center col-md-12\">"
                                        ."<div class=\"card-body mt-3\">"
                                          ."<div class=\"alert-success\" role=\"alert\">Resultado Obtenido!"
                                          ."<p class=\"text-info\"> el valor total a recibir es de: $ ".$resultado."</p>"
                                        ."</div>"
                                      ."</div>");
                                      }
                                      elseif($horas > 40){
                                        $resultado = ($horas -40)*25000+(40*20000);
                                        $extras = $horas - 40;

                                        echo("<div class=\"card text-center col-md-12\">"
                                              ."<div class=\"card-body mt-3\">"
                                                ."<div class=\"alert-success\" role=\"alert\">Resultado Obtenido!"
                                                ."<p class=\"text-info\">Las horas extras trabajadas son  ".$extras." y el valor total a recibir es de: $ ".$resultado."</p>"
                                              ."</div>"
                                            ."</div>");
                                      }
  
                                    }
                                    else{
                                      echo "<div class=\"alert alert-danger\" role=\"alert\">"
                                              ."Debes ingresar la cantidad de horas trabajadas"
                                            ."</div>";
                                    }
                                  }
                                }
                              ?>
                            </div>
                          </div>
                          
                        </form>  
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    </body>
    
    </html>