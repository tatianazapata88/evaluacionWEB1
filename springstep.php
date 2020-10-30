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
                        <form action="springstep.php" method="POST">
                            <div class="row mt-5">
                                <div class="col">
                                    <img src="img/tenis.jpg" class="img-fluid" alt="tenis" name="tenis" id="tenis"></img>
                                    <label for="tenis" name="preciotenis">$150.000 par</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidadtenis">
                                </div>
                                <div class="col">
                                    <img src="img/botas.jpg" class="img-fluid" alt="botas" name="botas" id="botas"></img>
                                    <label for="botas" name="preciobotas">$300.000 par</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidadbotas">
                                </div>
                                <div class="col">
                                    <img src="img/chanclas.jpg" class="img-fluid" alt="chanclas" name="chanclas" id="chanclas"></img>
                                    <label for="chanclas" name=chanclas>$60.000 par</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidadchanclas">
                                </div>
                            </div> 
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4" name="botonCalcular">CALCULAR COMPRA</button>
                            </div>
                            <br>
                            <?php if(isset($_POST["botonCalcular"])):       
                                
                                $cantidadTenis=$_POST["cantidadtenis"];
                                $cantidadBotas=$_POST["cantidadbotas"];
                                $cantidadChanclas=$_POST["cantidadchanclas"];
                                $precioTenis=150000;
                                $precioBotas=300000;
                                $precioChnaclas=60000;
                                $dcto3pares=0.1;
                                $dcto3a8pares=0.2;
                                $dctomayor8=0.5;
                                
                                $cantidadzapatos=$cantidadBotas+$cantidadChanclas+$cantidadTenis;
                                $valorcompra=($cantidadTenis*$precioTenis)+($cantidadBotas*$precioBotas)+($cantidadChanclas*$precioChnaclas);?>

                                    <?php if($cantidadzapatos>="0"&&$cantidadzapatos<"3"):?>
                                        <?php $valorpagar=$valorcompra?>
                                        <?php echo("El valor total de la compra es ".$valorpagar)?>
                                    <?php elseif($cantidadzapatos=="3"):?>
                                        <?php echo("El valor total de la compra es ".$valorcompra)?>
                                        <br>
                                        <?php $valordescuento=$valorcompra*$dcto3pares?>
                                        <?php echo("Por comprar ".$cantidadzapatos." pares de zapatos tienes un 10% de descuento ".$valordescuento)?>  
                                        <?php $valorpagar=$valorcompra-$valordescuento?>
                                        <br>
                                        <?php echo("Valor total a pagar ".$valorpagar)?>
                                    <?php elseif($cantidadzapatos>"3"&&$cantidadzapatos<="8"):?> 
                                        <?php echo("El valor total de la compra es ".$valorcompra)?>
                                        <br>
                                        <?php $valordescuento=$valorcompra*$dcto3a8pares?>
                                        <?php echo("Por comprar ".$cantidadzapatos." pares de zapatos tienes un 20% de descuento ".$valordescuento)?>  
                                        <?php $valorpagar=$valorcompra-$valordescuento?>
                                        <br>
                                        <?php echo("Valor total a pagar ".$valorpagar)?>
                                    <?php elseif($cantidadzapatos>"8"):?> 
                                        <?php echo("El valor total de la compra es".$valorcompra)?>
                                        <br>
                                        <?php $valordescuento=$valorcompra*$dctomayor8?>
                                        <?php echo("Por comprar ".$cantidadzapatos." pares de zapatos tienes un 20% de descuento ".$valordescuento)?>  
                                        <?php $valorpagar=$valorcompra-$valordescuento?>
                                        <br>
                                        <?php echo("Valor total a pagar ".$valorpagar)?>
                                    <?php else:?>  
                                        <?php echo("verificar las cantidades")?>
                                <?php endif?>
                            <?php endif?>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4" name="botoncomprar">COMPRAR</button>
                            </div>
                            <?php if(isset($_POST["botoncomprar"])):?>
                                <?php echo("Se ha efectuado la compra")?>
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