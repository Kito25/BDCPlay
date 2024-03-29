<?php include("configuracion.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">BDCPlay&nbsp;</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio&nbsp;</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Peliculas&nbsp;</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Accion</a></li>
                            
                                <li><a class="dropdown-item" href="#!">Terror</a></li>
                                <li><a class="dropdown-item" href="#!">Comedia</a></li>
                            </ul>
                        </li>
						
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Series&nbsp;</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Netflix</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Amazon</a></li>
                                <li><a class="dropdown-item" href="#!">HBO</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                        <button class="btn btn-outline-dark" type="submit"  >
                            <a class="dropdown-item" href="registro.html">Registro-hacer formulario</a>
                            
                            
                            
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">&nbsp;<em><strong>¡Gracias por registrarte!</strong></em></h1>
                    <p class="lead fw-normal text-white-50 mb-0">Estos son tus datos</p>
                </div>
            </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Section-->
        <section class="container">
			<!--aca va el formulario kito pelotudo-->
            <?php 
$Nombre= $_POST['Nombre'];
echo $Nombre;
echo "<br>";
$Apellido = $_POST['Apellido'];
echo $Apellido;
echo "<br>";
$Correo = $_POST['Correo'];
echo $Correo;
echo "<br>";
$Contrasenia = $_POST['Contrasenia'];
echo $Contrasenia;
echo "<br>";

    
if(empty($Nombre)){
    echo "<script>";
    echo "alert('el campo nombre no puede estar vacio');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
if(empty($Apellido)){
    echo "<script>";
    echo "alert('el campo Apellido');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
if(empty($Correo)){
    echo "<script>";
    echo "alert('el campo Correo');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
    if(empty($Contrasenia)){
        echo "<script>";
        echo "alert('el campo Contraseña no puede estar vacio');";
        echo "window.history.go(-1)";
        echo "</script>";
        die();
    }
?>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">© 2022 BDCPlay&nbsp; , Todos los derechos reservados.</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
