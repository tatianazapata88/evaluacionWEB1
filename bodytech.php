<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BodyTech</title>
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
                            <img class="card-img-top w-100 img-fluid" src="img/bodytech.png" alt="cuentas">
                        <div class="card-body">
                            <h5 class="card-text text-info text-center">Punto 2</h5>
                            <p class="card-text">El gimnasio Bodytech, lo contrata para desarrollar un aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en la formula y de acuerdo a los </p>
                        </div>
                        </div>     
                    </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <form action="bodytech.php" method="POST">
                            <div class="row mt-5">
                                <div class="col">
                                    <input type="decimal" class="form-control" placeholder="Digita tu Peso Kg" name="peso">
                                </div>
                                <div class="col">
                                    <input type="decimal" class="form-control" placeholder="Digita tu altura Mt" name="altura">
                                </div>
                            </div> 
                            <select class="form-control mt-5" name="genero">
                                <option value="0">Hombre</option>
                                <option value="1" >Mujer</option>
                            </select>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4" name="botonCalcular">CALCULAR IMC</button>
                            </div>
                            <?php if(isset($_POST["botonCalcular"])):       
                                
                                $peso=$_POST["peso"];
                                $altura=$_POST["altura"];
                                $genero=$_POST["genero"];
                                
                              
                                $operacion= $peso / ($altura * $altura)?>

                                <?php if($operacion<18.5&&$operacion>=10&&$genero=="0"):?>
                                    <img src="img/pesoinsh.JPG" class="mx-auto d-block img-fluid" alt="pesoinsufhombre">
                                    <?php echo("<br>")?>
                                    <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                    <?php echo("<br>")?>
                                    <?php echo("Esto quiere decir que tienes peso insuficiente")?>
                                <?php elseif($operacion>=18.5&&$operacion<=24.9&&$genero=="0"):?> 
                                       <img src="img/pesonormalh.JPG  "class="mx-auto d-block img-fluid" alt="pesonorhombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes peso Normal")?>
                                <?php elseif($operacion>=25&&$operacion<=26.9&&$genero=="0"):?> 
                                       <img src="img/sobrepeso1h.JPG  "class="mx-auto d-block img-fluid" alt="sobrepeso1hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes sobre peso tipo I")?>
                                <?php elseif($operacion>=27&&$operacion<=29.9&&$genero=="0"):?> 
                                       <img src="img/sobrepeso2h.JPG  "class="mx-auto d-block img-fluid" alt="sobrepeso2hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes sobre peso tipo 2, una preobesidad")?>
                                <?php elseif($operacion>=30&&$operacion<=34.9&&$genero=="0"):?> 
                                       <img src="img/obesidadtipo1h.JPG  "class="mx-auto d-block img-fluid" alt="obesidad1hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 1")?>
                                <?php elseif($operacion>=35&&$operacion<=39.9&&$genero=="0"):?> 
                                       <img src="img/obesidadtipo2h.JPG  "class="mx-auto d-block img-fluid" alt="obesidad2hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 2")?> 
                                <?php elseif($operacion>=40&&$operacion<=49.9&&$genero=="0"):?> 
                                       <img src="img/obesidadh.JPG  "class="mx-auto d-block img-fluid" alt="obesidad3hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 3, obesidad mórbida")?>
                                <?php elseif($operacion>=50&&$genero=="0"):?> 
                                       <img src="img/obesidadh.JPG  "class="mx-auto d-block img-fluid" alt="obesidadexthombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 4, obesidad extrema")?> 
                                <?php elseif($operacion<18.5&&$operacion>=10&&$genero=="1"):?>
                                    <img src="img/pesoinsm.JPG" class="mx-auto d-block img-fluid" alt="pesoinsufmujer">
                                    <?php echo("<br>")?>
                                    <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                    <?php echo("<br>")?>
                                    <?php echo("Esto quiere decir que tienes peso insuficiente")?>
                                <?php elseif($operacion>=18.5&&$operacion<=24.9&&$genero=="1"):?> 
                                       <img src="img/pesonormalm.JPG  "class="mx-auto d-block img-fluid" alt="pesonormujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes peso Normal")?>
                                <?php elseif($operacion>=25&&$operacion<=26.9&&$genero=="1"):?> 
                                       <img src="img/sobrepeso1m.JPG  "class="mx-auto d-block img-fluid" alt="sobrepeso1mujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes sobre peso tipo I")?>
                                <?php elseif($operacion>=27&&$operacion<=29.9&&$genero=="1"):?> 
                                       <img src="img/sobrepeso2m.JPG  "class="mx-auto d-block img-fluid" alt="sobrepeso2mujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes sobre peso tipo 2, una preobesidad")?>
                                <?php elseif($operacion>=30&&$operacion<=34.9&&$genero=="1"):?> 
                                       <img src="img/obesidadtipo1m.JPG  "class="mx-auto d-block img-fluid" alt="obesidad1mujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 1")?>
                                <?php elseif($operacion>=35&&$operacion<=39.9&&$genero=="1"):?> 
                                       <img src="img/obesidadtipo2m.JPG  "class="mx-auto d-block img-fluid" alt="obesidad2mujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 2")?> 
                                <?php elseif($operacion>=40&&$operacion<=49.9&&$genero=="1"):?> 
                                       <img src="img/obesidadm.JPG  "class="mx-auto d-block img-fluid" alt="obesidad3mujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 3, obesidad mórbida")?>
                                <?php elseif($operacion>=50&&$genero=="0"):?> 
                                       <img src="img/obesidadextm.JPG  "class="mx-auto d-block img-fluid" alt="obesidadexmujer">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Esto quiere decir que tienes obesidad tipo 4, obesidad extrema")?>   
                                <?php else:?>  
                                        <?php echo("Ingresar nuevamente los datos")?>
                                <?php endif?>
                            <?php endif?>
                        </form>   
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