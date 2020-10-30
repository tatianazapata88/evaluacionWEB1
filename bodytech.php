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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="nav-link" href="gimnasio.php">BodyTech</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="springstep.php">Spring Step<a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
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
                                        <?php echo("genero no identificado")?>
                                <?php endif?>
                            <?php endif?>
                        </form>   
                    </div>
                </div>
            </div>
        </main>
        <footer>
   
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>