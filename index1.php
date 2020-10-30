<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title> EJERCICIOS TALLER PHP</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logoIntersoftware.png" width="70" height="50" class="d-inline-block align-top" alt="logo" loading="lazy">
                </a>
                <a class="navbar-brand" href="index.php" id="textoPrincipal">EJERCICIOS TALLER PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link active" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Puntos del 1 al 5 </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="punto.php">Punto 1</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="punto2.php">Punto 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="punto3.php">Punto 3</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="punto4.php">Punto 4</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="punto5.php">Punto 5</a>
                            </div>
                        </li>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <main>
    <section class="container" id="galeria">
    <div class="text-center pt-5" >
        <h1>
            Primer Taller evaluativo
        </h1>
        <p>
        Realizado por Liseth Arelis Giraldo Morales y Luz Tatiana Zapata
        </p>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm 12"><a href="punto1.php"><img src="img/calculadora.jpg" alt="Calculadora"></a>
    <h3>Calculadora</h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm 12"><a href="punto2.php"><img src="img/masaCorporal.png" alt="Indide Masa Corporal"></a>
    <h3>Indice Masa Muscular</h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm 12"><a href="punto3.php"><img src="img/zapatos.jpg" alt="Zapatos"></a>
    <h3>Compra Zapatos</h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm 12"><a href="punto4.php"><img src="img/salario.jpg" alt="Salario"></a>
    <h3>Calcula Salario</h3>
    </div>
    <div class="col-lg-4 col-md-6 col-sm 12"><a href="punto5.php"><img src="img/banco.jpg" alt="Banco"></a>
    <h3>mayor salario</h3>
    </div>
    </div >
    
    </section>  

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>