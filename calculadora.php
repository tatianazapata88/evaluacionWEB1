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
                    <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled<a>
                    </li>
                </ul>
            </div>
        </nav>
    
   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-3">
            
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

                                switch($operacion){
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


           </div>
       </div>
   </div>
   


                
                    
                
                
            </form>


            

            
  
   
   </main>
   <footer>
   
   </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>