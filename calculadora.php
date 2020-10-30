<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
            <div class="row mt-5 ml-5">
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top w-100 img-fluid" src="img/calculadora.jpg" alt="cuentas">
                  <div class="card-body">
                    <h5 class="card-text text-info text-center">Punto 1</h5>
                    <p class="card-text">1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación y división de dos números enteros almacenados en 2 variables diferentes (utilice formularios HTML).</p>
                  </div>
                </div>     
              </div>
                <div class="row mt-5 ml-5">
                    <div class="col-md-8">
                        <form action="calculadora.php" method="POST">
                            <div class="row mt-5">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="NUMERO 1" name="numero1">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="NUMERO 2" name="numero2">
                                </div>
                            </div>
                            <select class="form-control mt-5" name="operacion">
                                <option value="0">Operacion</option>
                                <option value="1" >Suma</option>
                                <option value="2">Resta</option>
                                <option value="3">Multiplicacion</option>
                                <option value="4">Division</option>
                            </select>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4" name="botonCalcular">CALCULAR</button>
                            </div>
                            <?php if(isset($_POST["botonCalcular"]))
                                {       
                                $num1=$_POST["numero1"];
                                $num2=$_POST["numero2"];
                                $operacion=$_POST["operacion"];

                                switch($operacion)
                                    {
                                    case 1:
                                        $resultado=$num1 + $num2;
                                        break;
                                    case 2:
                                        $resultado=$num1 - $num2;
                                        break;
                                    case 3:
                                        $resultado=$num1 * $num2;
                                        break;
                                    case 4:
                                        $resultado=$num1 / $num2;
                                        break;
                                    default;
                                        echo("<br>");
                                        echo("Por favor escoger una operacion");
                                
                                    }
                                }    
                            ?>
                            <div class="col mt-4">
                                <input type="number" class="form-control" placeholder="RESULTADO" name="resultado" value="<?php echo($resultado)?>">
                            </div>    
                        </form>           
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
                        <p>Medellin - Colombia</p>
                    </div>
                    <div class="col-md-3 mt-5">
                        <img src="img/tatiana.jpg" alt="Tatiana Zapata" class="img-fluid w-100 rounded-circle">
                        <p>Luz Tatiana Zapata ©</p>
                        <p>tatiana@gmail.com</p>
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